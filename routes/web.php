<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DistrictController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseDetailController;

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

Route::get('/index', [ProductController::class, 'getMostSelled'])->name('index');

Auth::routes(['reset' => false]);

Route::resource('/category', CategoryController::class)->middleware('auth');
Route::resource('/employee', EmployeeController::class)->middleware('auth');

Route::resource('payment-methods', App\Http\Controllers\PaymentMethodController::class)->middleware('auth');

Auth::routes();

Route::get('/main', [CategoryController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [CategoryController::class, 'index'])->name('home');
});

Route::resource('/products', ProductController::class)->middleware('auth');

Route::get('/searchByID', [ProductController::class, 'searchById'])->name('products.searchByID')->middleware('auth');


/* RUTAS DE UBIGEO */
Route::get('/department', [DepartmentController::class, 'index']);
Route::post('/provinces', [ProvinceController::class, 'getProvincesByDepartment']);
Route::post('/districts', [DistrictController::class, 'getDistrictByProvince']);


/* RUTAS CATALOGO */
Route::get('/catalogue', [ProductController::class, 'catalogue'])->name('catalogue');
Route::get('/catalogue/{categoryId}',[ProductController::class, 'filterByCategory'])->name('filterByCategory');

/*RUTAS DETALLE PRODUCTO*/
Route::get('/productdetail/{productId}',[ProductController::class, 'productById'])->name('productById');

/*RUTAS DETALLE DE COMPRA*/
Route::get('purchaseDetail',[PurchaseDetailController::class, 'index'])->name('shoppingCart')->middleware('auth');
Route::get('purchaseDetailJson',[PurchaseDetailController::class, 'indexJson'])->name('shoppingCartJson')->middleware('auth');
Route::post('purchaseDetail',[PurchaseDetailController::class, 'addToCart'])->name('addToCart')->middleware('auth');
Route::put('updatePurchaseDetail',[PurchaseDetailController::class, 'updateCart'])->name('updateCart')->middleware('auth');
Route::delete('deleteFromPurchaseDetail/{id}',[PurchaseDetailController::class, 'deleteFromCart'])->name('deleteFromCart')->middleware('auth');

