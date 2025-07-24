<?php

use App\Http\Controllers\ProyectoController;

Route::resource('proyectos', ProyectoController::class);

Route::get('/', function () {
    return view('welcome');
});
