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


Route::get('/departamentos', 'App\Http\Controllers\DepartamentoController@index');
Route::post('/departamentos', 'App\Http\Controllers\DepartamentoController@store');
Route::put('/departamentos/{id}', 'App\Http\Controllers\DepartamentoController@update');
Route::delete('/departamentos/{id}', 'App\Http\Controllers\DepartamentoController@destroy');


Route::get('/categorias', 'App\Http\Controllers\CategoriaController@index');
Route::post('/categorias', 'App\Http\Controllers\CategoriaController@store');
Route::put('/categorias/{id}', 'App\Http\Controllers\CategoriaController@update');
Route::delete('/categorias/{id}', 'App\Http\Controllers\CategoriaController@destroy');