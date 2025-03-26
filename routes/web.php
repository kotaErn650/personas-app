<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
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


//Rutas de mi Municipio
Route::get('/municipio',[MunicipioController::class, 'index'])->name('municipio.index');
Route::post('/municipio',[MunicipioController::class, 'store'])->name('municipio.store');
Route::get('/municipio/new',[MunicipioController::class, 'create'])->name('municipio.new');
Route::delete('/municipio/{municipio}',[MunicipioController::class, 'destroy'])->name('municipio.destroy');
Route::put('/municipio/{municipio}',[MunicipioController::class, 'update'])->name('municipio.update');
Route::get('/municipio/{municipio}/edit',[MunicipioController::class, 'edit'])->name('municipio.edit');

//Rua de mi Departamento
Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento.index');
Route::post('/departamento', [DepartamentoController::class, 'store'])->name('departamento.store');
Route::get('/departamento/create', [DepartamentoController::class, 'create'])->name('departamento.create');
Route::delete('/departamento/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');
Route::put('/departamento/{departamento}', [DepartamentoController::class, 'update'])->name('departamento.update');
Route::get('/departamento/{departamento}/edit', [DepartamentoController::class, 'edit'])->name('departamento.edit');

//Ruta e mi Pais
Route::get('/pais', [PaisController::class, 'index'])->name('pais.index');
Route::post('/pais', [PaisController::class, 'store'])->name('pais.store');
Route::get('/pais/new', [PaisController::class, 'create'])->name('pais.new');
Route::delete('/pais/{pais}', [PaisController::class, 'destroy'])->name('pais.destroy');
Route::put('/pais/{pais}', [PaisController::class, 'update'])->name('pais.update');
Route::get('/pais/{pais}/edit', [PaisController::class, 'edit'])->name('pais.edit');