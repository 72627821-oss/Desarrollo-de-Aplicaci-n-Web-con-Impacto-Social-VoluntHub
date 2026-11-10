<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OportunidadController;
use App\Http\Controllers\Auth\RegisterController;

// 1. Ruta Inicio (Carga automáticamente las últimas convocatorias reales)
Route::get('/', function () {
    $oportunidades = \App\Models\Oportunidad::latest()->take(6)->get();
    return view('index', compact('oportunidades'));
})->name('home');

// 2. Rutas Públicas
Route::get('/nosotros', function () { return view('nosotros'); })->name('nosotros');
Route::get('/oportunidades', [OportunidadController::class, 'index'])->name('oportunidades.index');
Route::get('/oportunidades/{id}', [OportunidadController::class, 'show'])->name('oportunidades.show');

// 3. Registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// 4. Acciones Autenticadas
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->esOrganizacion()) {
            return view('organizacion.panel');
        }
        return view('voluntario.panel');
    })->name('dashboard');

    // Creación de oportunidades
    Route::get('/oportunidades/crear/nueva', [OportunidadController::class, 'create'])->name('oportunidades.create');
    Route::post('/oportunidades/guardar', [OportunidadController::class, 'store'])->name('oportunidades.store');

    // Postulación del voluntario y evaluación de la organización
    Route::post('/oportunidades/{id}/postular', [OportunidadController::class, 'mePostulo'])->name('oportunidades.postular');
    Route::post('/postulaciones/{id}/estado', [OportunidadController::class, 'cambiarEstadoPostulacion'])->name('postulaciones.estado');

    // Favoritos
    Route::post('/favoritos/toggle/{id}', [OportunidadController::class, 'toggleFavorito'])->name('favoritos.toggle');
});

if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}