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
Route::get('/comuna/new',[ComunaController::class, 'create'])->name('comuna.new');
Route::delete('/comuna/{comuna}',[ComunaController::class, 'destroy'])->name('comuna.destroy');
Route::put('/comuna/{comuna}',[ComunaController::class, 'update'])->name('comuna.update');
Route::get('/comuna/{comuna}/edit',[ComunaController::class, 'edit'])->name('comuna.edit');

Route::get('/usuario',[UsuarioController::class, 'index']);