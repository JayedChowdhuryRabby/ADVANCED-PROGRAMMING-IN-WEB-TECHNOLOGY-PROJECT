<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthControllerClient;
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
Route::get('/products/list',[ProductController::class,'APIList']);
Route::post('/products/list',[ProductController::class,'APIPost']);
//Customer Register
Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);
Route::post('logout',[AuthController::class,'logout']);
Route::post('addtocart',[AuthController::class,'addtocart']);



//Client Register
Route::post('clientregister',[AuthControllerClient::class,'clientregister']);
Route::post('product',[ProductController::class,'product']);
Route::get('ProductList',[ProductController::class,'ProductList']);
Route::get('ClientList',[AuthControllerClient::class,'ClientList']);
Route::get('CustomerList',[AuthController::class,'CustomerList']);