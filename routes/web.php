<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\DetailBillController;




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

Route::get('/', [ProductController::class,'index']);
//Admin
Route::get('/admin', [LoginController::class,'admin']);
//Login
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'login']);
Route::get('/register', [LoginController::class,'register']);
Route::post('/register',[LoginController::class,'store']);
//Product
Route::get('/formSP', [ProductController::class,'FormAdd']);
Route::post('/formSP', [ProductController::class,'store']);
Route::get('/formS/edit/{id}', [ProductController::class,'FormEdit']);
Route::put('/formS/edit/{id}', [ProductController::class,'update']);
//Catologries
Route::get('/formDM', [CategoriesController::class,'FormAdd']);
Route::post('/formDM', [CategoriesController::class,'store']);
Route::get('/formD/edit/{id}', [CategoriesController::class,'FormEdit']);
Route::put('/formD/edit/{id}', [CategoriesController::class,'update']);
//Table
Route::get('/tableSP', [ProductController::class,'indexAdmin']);
Route::delete('/tableSP/delete/{id}', [ProductController::class,'destroy']);
Route::get('/tableDM', [CategoriesController::class,'indexAdmin']);
Route::delete('/tableDM/delete/{id}', [CategoriesController::class,'destroy']);
Route::get('/tableHD', [BillController::class,'admin']);
Route::post('/tableHD/{id}', [BillController::class,'update']);
Route::get('/tableCTHD/{id}', [DetailBillController::class,'detailBill']);
Route::get('/tableCTHD', [DetailBillController::class,'index']);
Route::get('/tableND', [LoginController::class,'indexAdmin']);
Route::delete('/tableND/delete/{id}', [LoginController::class,'destroy']);
//Cart
Route::get('/cart', [CartController::class,'index']);
Route::get('/cart/add/{id}', [CartController::class,'add']);
Route::post('/cart/add/{id}', [CartController::class,'add']);
Route::get('/cart/remove/{rowId}', [CartController::class,'remove']);
//Checkout
Route::get('/checkout', [BillController::class,'index']);
Route::post('/checkout/{id}', [BillController::class,'add']);
//Detail
Route::get('/detail/{id}', [ProductController::class,'show']);
//Shop
Route::get('/shop', [ShopController::class,'index']);
//Contact
Route::get('/contact', function(){
    return view("User.contact");
});
//Profile
Route::get('/profile/{id}', [LoginController::class,'profile']);
Route::post('/profile/{id}',[LoginController::class,'update']);
//Search
Route::get('/search', [ProductController::class,'search']);
Route::get('/search/{id}', [ProductController::class,'searchDM']);



