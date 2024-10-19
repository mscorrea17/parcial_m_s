<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\AsistenciaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('empleados', EmpleadoController::class);
    Route::resource('departamentos', DepartamentoController::class);
    Route::resource('asistencias', AsistenciaController::class);
});

require __DIR__.'/auth.php';
