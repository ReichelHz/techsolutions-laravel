<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

Route::resource('proyectos', ProyectoController::class);

Route::get('/', [ProyectoController::class, 'index']);
