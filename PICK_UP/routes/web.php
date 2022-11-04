<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

//client registration
Route::get('/clientCreate', [ClientController::class, 'client'])->name('clientCreate');
Route::post('/clientCreate',[ClientController::class, 'clientCreateSubmitted'])->name('clientCreateSubmitted');
Route::get('/client/dash', [clientController::class,'clientDash'])->name('clientDash');

//customer registration
Route::get('/customerCreate', [CustomerController::class, 'customer'])->name('customerCreate');
Route::post('/customerCreate',[CustomerController::class, 'customerCreateSubmitted'])->name('customerCreateSubmitted');
//customer login and logout
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
//product add
Route::get('/addProduct',[ProductController::class,'addProduct'])->name('addProduct');
//Route::get('/clientaddp',[ProductController::class,'clientaddp'])->name('clientaddp');
Route::post('/addProduct',[ProductController::class,'addProductSubmit'])->name('addProduct');
Route::get('/products/list',[ProductController::class,'list'])->name('products.list');


/**product routes */
Route::get('/products/list',[ProductController::class,'list'])->name('products.list');
Route::get('/addtocart',[ProductController::class,'addtocart'])->name('products.addtocart');
Route::get('/emptycart',[ProductController::class,'emptycart'])->name('products.emptycart');
Route::get('/cart',[ProductController::class,'mycart'])->name('products.mycart');
Route::post('/checkout',[ProductController::class,'checkout'])->middleware('ValidCustomer')->name('checkout');
/**product routes end */
Route::get('/customer/myorders',[CustomerController::class,'myorders'])->middleware('ValidCustomer')->name('customer.myorders');
Route::get('/customer/myorders/details',[CustomerController::class,'orderdetails'])->middleware('ValidCustomer')->name('customer.myorders.details');

Route::get('/teacher/dash', [CustomerController::class,'customerDash'])->name('customerDash')->middleware('ValidCustomer');
