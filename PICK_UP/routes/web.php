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

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('/home', [PagesController::class, 'home'])->name('home');
//Client registration
Route::get('/clientCreate', [ClientController::class, 'client'])->name('clientCreate');
Route::post('/clientCreate',[ClientController::class, 'clientCreateSubmitted'])->name('clientCreateSubmitted');

//customer registration
Route::get('/customerCreate', [CustomerController::class, 'customer'])->name('customerCreate');
Route::post('/customerCreate',[CustomerController::class, 'customerCreateSubmitted'])->name('customerCreateSubmitted');
//customer login and logout
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
//product add
Route::get('/addProduct',[ProductController::class,'addProduct'])->name('addProduct');
Route::post('/addProduct',[ProductController::class,'addProductSubmit'])->name('addProduct');
Route::get('/products/productlist',[ProductController::class,'productlist'])->name('products.list');


Route::get('/teacher/dash', [CustomerController::class,'customerDash'])->name('customerDash')->middleware('ValidCustomer');
Route::get('/client/dash', [clientController::class,'clientDash'])->name('clientDash');