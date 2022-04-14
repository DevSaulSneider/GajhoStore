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

// /** Rutas Departamentos */
// Route::get('/departments', 'App\Http\Controllers\DepartmentController@index');
// Route::post('/departments', 'App\Http\Controllers\DepartmentController@store');
// Route::put('/departments/{id}', 'App\Http\Controllers\DepartmentController@update');
// Route::delete('/departments/{id}', 'App\Http\Controllers\DepartmentController@destroy');

// /** Rutas Categorias */
// Route::get('/categories', 'App\Http\Controllers\CategoryController@index');
// Route::post('/categories', 'App\Http\Controllers\CategoryController@store');
// Route::put('/categories/{id}', 'App\Http\Controllers\CategoryController@update');
// Route::delete('/categories/{id}', 'App\Http\Controllers\CategoryController@destroy');

// /** Rutas Turnos */
// Route::get('/turns', 'App\Http\Controllers\TurnController@index');
// Route::post('/turns', 'App\Http\Controllers\TurnController@store');
// Route::put('/turns/{id}', 'App\Http\Controllers\TurnController@update');
// Route::delete('/turns/{id}', 'App\Http\Controllers\TurnController@destroy');

// /** Rutas MetodoPago */
// Route::get('/payment_methods', 'App\Http\Controllers\PaymentMethodController@index');
// Route::post('/payment_methods', 'App\Http\Controllers\PaymentMethodController@store');
// Route::put('/payment_methods/{id}', 'App\Http\Controllers\PaymentMethodController@update');
// Route::delete('/payment_methods/{id}', 'App\Http\Controllers\PaymentMethodController@destroy');


// /** Rutas provincias */
// Route::get('/provinces', 'App\Http\Controllers\ProvinceController@index');
// Route::post('/provinces', 'App\Http\Controllers\ProvinceController@store');
// Route::put('/provinces/{id}', 'App\Http\Controllers\ProvinceController@update');
// Route::delete('/provinces/{id}', 'App\Http\Controllers\ProvinceController@destroy');
