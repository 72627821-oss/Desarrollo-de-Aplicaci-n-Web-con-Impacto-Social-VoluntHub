<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OportunidadController;

// 1. Ruta de la página principal (Home)
Route::get('/', function () {
    return view('index');
})->name('home');

// 2. Ruta de Dashboard (redirecciona a inicio si no usas vista de panel separada)
Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

// 3. Ruta de la página "Nosotros"
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

// 4. Rutas de Oportunidades (Listado y Detalle)
Route::get('/oportunidades', [OportunidadController::class, 'index'])->name('oportunidades.index');
Route::get('/oportunidades/{id}', [OportunidadController::class, 'show'])->name('oportunidades.show');

// 5. Ruta para los Corazones en OportunidadController
Route::post('/favoritos/toggle/{id}', [OportunidadController::class, 'toggleFavorito'])
    ->name('favoritos.toggle');

// 6. Incluir rutas de autenticación de Laravel si existen
if (file_exists(__DIR__.'/auth.php')) {
    require __DIR__.'/auth.php';
}