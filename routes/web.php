<?php
use App\Http\Controllers\OportunidadController;

Route::get('/oportunidades', [OportunidadController::class, 'index'])->name('oportunidades.index');
Route::get('/organizacion/crear-oportunidad', [OportunidadController::class, 'create'])->name('oportunidades.create');
Route::post('/organizacion/crear-oportunidad', [OportunidadController::class, 'store'])->name('oportunidades.store');