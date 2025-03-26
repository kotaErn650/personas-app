<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ruta para comunas//
Route::get('/comuna',[ComunaController::class, 'index'])->name('comuna.index'); 
Route::post('/comuna',[ComunaController::class, 'store'])->name('comuna.store');
Route::get('/comuna/new',[ComunaController::class, 'create'])->name('comuna.create');

Route::get('/usuario',[UsuarioController::class, 'index']);