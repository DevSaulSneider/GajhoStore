<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/** Rutas Departamentos */
Route::get('/departamentos', 'App\Http\Controllers\DepartamentoController@index');
Route::post('/departamentos', 'App\Http\Controllers\DepartamentoController@store');
Route::put('/departamentos/{id}', 'App\Http\Controllers\DepartamentoController@update');
Route::delete('/departamentos/{id}', 'App\Http\Controllers\DepartamentoController@destroy');

/** Rutas Categorias */
Route::get('/categorias', 'App\Http\Controllers\CategoriaController@index');
Route::post('/categorias', 'App\Http\Controllers\CategoriaController@store');
Route::put('/categorias/{id}', 'App\Http\Controllers\CategoriaController@update');
Route::delete('/categorias/{id}', 'App\Http\Controllers\CategoriaController@destroy');

/** Rutas Turnos */
Route::get('/turnos', 'App\Http\Controllers\TurnoController@index');
Route::post('/turnos', 'App\Http\Controllers\TurnoController@store');
Route::put('/turnos/{id}', 'App\Http\Controllers\TurnoController@update');
Route::delete('/turnos/{id}', 'App\Http\Controllers\TurnoController@destroy');

/** Rutas MetodoPago */
Route::get('/metodo_pagos', 'App\Http\Controllers\MetodoPagoController@index');
Route::post('/metodo_pagos', 'App\Http\Controllers\MetodoPagoController@store');
Route::put('/metodo_pagos/{id}', 'App\Http\Controllers\MetodoPagoController@update');
Route::delete('/metodo_pagos/{id}', 'App\Http\Controllers\MetodoPagoController@destroy');


/** Rutas provincias */
Route::get('/provincias', 'App\Http\Controllers\ProvinciaController@index');
Route::post('/provincias', 'App\Http\Controllers\ProvinciaController@store');
Route::put('/provincias/{id}', 'App\Http\Controllers\ProvinciaController@update');
Route::delete('/provincias/{id}', 'App\Http\Controllers\ProvinciaController@destroy');
