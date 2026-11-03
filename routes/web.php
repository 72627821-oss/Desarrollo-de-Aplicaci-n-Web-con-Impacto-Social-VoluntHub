<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OportunidadController;

// 1. Ruta de la página principal (Home)
Route::get('/', function () {
    return view('index');
})->name('home');

// 2. Ruta de la página "Nosotros"
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

// 3. Rutas de Oportunidades (Listado y Detalle)
Route::get('/oportunidades', [OportunidadController::class, 'index'])->name('oportunidades.index');
Route::get('/oportunidades/{id}', [OportunidadController::class, 'show'])->name('oportunidades.show');

// 4. Ruta para los Corazones en OportunidadController
Route::post('/favoritos/toggle/{id}', [OportunidadController::class, 'toggleFavorito'])
    ->name('favoritos.toggle');

// 5. Incluir rutas de autenticación de Laravel
if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}