<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\AsistenciaController;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});


Route::middleware(['auth', 'verified'])->group(function () {

   
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

   
    Route::prefix('dashboard')->group(function () {
        Route::resource('empleados', EmpleadoController::class);
        Route::resource('departamentos', DepartamentoController::class);
        Route::resource('asistencias', AsistenciaController::class);
    });

   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
