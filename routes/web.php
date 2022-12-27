<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\futbolAppController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\plazasController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\TurnosController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;




Route::resource('futbol', futbolAppController::class)
->middleware('auth');
Route::resource('login', LoginController::class);
Route::resource('registrar', RegistrarController::class);
Route::resource('plazas', plazasController::class);
Route::resource('team', TurnosController::class);
Route::get('/editar_partido',[\App\Http\Controllers\TurnosController::class, 'editar']);
Route::resource('equipo', EquipoController::class);
Route::post('/agregar/{id}', [\App\Http\Controllers\EquipoController::class, 'agregar_equipo'])
->name('equipo.agregar');
Route::post('/logout', [LoginController::class, 'destroy'])
->middleware('auth')
->name('logout');

// Route::post('update_equipo/{id}', [\App\Http\Controllers\EquipoController::class, 'update_equipo']);
// [\App\Http\Controllers\TurnosController::class, 'update_equipo']
// [\App\Http\Controllers\TurnosController::class, 'editar']

