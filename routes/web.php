<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberscontrollers;
use App\Http\Controllers\productController;
use App\Models\Products;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  $data = Products::select()->get();
  return view('index')->with(compact('data'));
});
Route::view('/register','register');
Route::view('/navigation','navigation');
Route::post('/register-action',[memberscontrollers::class,'add_users']);
Route::view('/login','login');
Route::get('/logout',[memberscontrollers::class,'logout']);
Route::post('/login-action',[memberscontrollers::class,'login']);
Route::view('/cart','cart');
Route::view('/footer','footer');
Route::view('/reset_pwd','reset_pwd');
// Route::get('/index',[productController::class,'products']);
Route::view("admin.product-form","admin/product-form");

// Admin
Route::view('/admin/dashboard','/admin/dashboard');
Route::get('/admin/dashboard',[memberscontrollers::class,'fech_user']);
Route::view("admin/product-form","admin/product-form");
Route::post("admin/product-action",[productController::class,'add_product']);
Route::view("admin/product","admin/admin-product");
Route::get("admin/product",[productController::class,'products']);
