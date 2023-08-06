<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberscontrollers;
use App\Models\Members;

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
  return view('index');
});
Route::view('/register','register');
Route::view('/navigation','navigation');
Route::view('/log','log');
Route::post('/login-action',[memberscontrollers::class,'add_users']);
Route::view('/login','login');
Route::view('/cart','cart');
Route::view('/footer','footer');
Route::view('/reset_pwd','reset_pwd');
Route::view('/home','index');

// Admin
Route::view('/admin/dashboard','/admin/dashboard');