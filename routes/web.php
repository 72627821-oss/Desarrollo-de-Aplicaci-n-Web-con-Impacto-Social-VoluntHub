<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OportunidadController;
use App\Http\Controllers\Auth\RegisterController;

// 1. Rutas Públicas
Route::get('/', function () { return view('index'); })->name('home');
Route::get('/nosotros', function () { return view('nosotros'); })->name('nosotros');
Route::get('/oportunidades', [OportunidadController::class, 'index'])->name('oportunidades.index');
Route::get('/oportunidades/{id}', [OportunidadController::class, 'show'])->name('oportunidades.show');

// 2. Rutas de Registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// 3. Panel Diferenciado segun el Rol del Usuario
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->esOrganizacion()) {
            return view('organizacion.panel'); // Carga resources/views/organizacion/panel.blade.php
        }
        return view('voluntario.panel'); // Carga resources/views/voluntario/panel.blade.php
    })->name('dashboard');

    Route::post('/favoritos/toggle/{id}', [OportunidadController::class, 'toggleFavorito'])->name('favoritos.toggle');
});

if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}