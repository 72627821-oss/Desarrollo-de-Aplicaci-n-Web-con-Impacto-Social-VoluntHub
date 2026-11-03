<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OportunidadController;
use App\Http\Controllers\ProfileController;

// --- RUTAS PÚBLICAS ---
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/oportunidades', [OportunidadController::class, 'index'])->name('oportunidades.index');

// --- RUTAS PROTEGIDAS (AUTENTICACIÓN) ---
Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // CRUD Oportunidades
    Route::get('/organizacion/crear-oportunidad', [OportunidadController::class, 'create'])->name('oportunidades.create');
    Route::post('/organizacion/crear-oportunidad', [OportunidadController::class, 'store'])->name('oportunidades.store');
    Route::delete('/organizacion/oportunidad/{id}', [OportunidadController::class, 'destroy'])->name('oportunidades.destroy');
    
    Route::get('/organizacion/panel', function () {
        $oportunidades = \App\Models\Oportunidad::all();
        return view('organizacion.panel', compact('oportunidades'));
    })->name('organizacion.panel');

    Route::get('/voluntario/panel', function () {
        return view('voluntario.panel');
    })->name('voluntario.panel');

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';