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


Route::get('/departamentos', 'DepartamentoController@index');
Route::post('/departamentos', 'DepartamentoController@store');
Route::put('/departamentos/{id}', 'DepartamentoController@update');
Route::delete('/departamentos/{id}', 'DepartamentoController@destroy');