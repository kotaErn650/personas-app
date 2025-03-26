<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comuna',[ComunaController::class, 'index']);

Route::get('/usuario',[UsuarioController::class, 'index']);