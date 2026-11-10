<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OportunidadController;
use App\Http\Controllers\Auth\RegisterController;

// 1. Interfaz General (Inicio)
Route::get('/', function () {
    $oportunidades = \App\Models\Oportunidad::latest()->take(6)->get();
    return view('index', compact('oportunidades'));
})->name('home');

// 2. Interfaz de Exploración y Detalle
Route::get('/nosotros', function () { return view('nosotros'); })->name('nosotros');
Route::get('/oportunidades', [OportunidadController::class, 'index'])->name('oportunidades.index');
Route::get('/oportunidades/{id}', [OportunidadController::class, 'show'])->name('oportunidades.show');

// 3. Registro Personalizado (Bypass a las rutas por defecto)
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/custom-register', [RegisterController::class, 'register'])->name('custom.register');

// 4. Interfaz Protegida por Rol (Voluntario / Organización)
Route::middleware(['auth'])->group(function () {
    
    // Enrutamiento directo evaluando el atributo 'role'
    Route::get('/dashboard', function () {
        if (auth()->user()->role === 'organizacion' || (method_exists(auth()->user(), 'esOrganizacion') && auth()->user()->esOrganizacion())) {
            return view('organizacion.panel');
        }
        return view('voluntario.panel');
    })->name('dashboard');

    // Formulario de publicación para la Organización
    Route::get('/oportunidades-crear', [OportunidadController::class, 'create'])->name('oportunidades.create');
    Route::post('/oportunidades-guardar', [OportunidadController::class, 'store'])->name('oportunidades.store');

    // Interacción Voluntario - Organización (Postulaciones y Evaluaciones)
    Route::post('/oportunidades/{id}/postular', [OportunidadController::class, 'mePostulo'])->name('oportunidades.postular');
    Route::post('/postulaciones/{id}/estado', [OportunidadController::class, 'cambiarEstadoPostulacion'])->name('postulaciones.estado');

    // Favoritos
    Route::post('/favoritos/toggle/{id}', [OportunidadController::class, 'toggleFavorito'])->name('favoritos.toggle');
});

if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}