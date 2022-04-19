<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DistrictController;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome2');
});


Route::resource('/category', CategoryController::class)->middleware('auth');
Route::resource('/employee', EmployeeController::class)->middleware('auth');

Auth::routes();

Route::get('/main', [CategoryController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [CategoryController::class, 'index'])->name('home');
});

Route::resource('/category', CategoryController::class)->middleware('auth');


/* RUTAS DE UBIGEO */
Route::get('/department', [DepartmentController::class, 'index']);
Route::post('/provinces', [ProvinceController::class, 'getProvincesByDepartment']);
Route::post('/districts', [DistrictController::class, 'getDistrictByProvince']);