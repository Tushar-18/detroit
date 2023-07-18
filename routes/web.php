<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\my;

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
Route::post('/page',[my::class,'page1']);
Route::view('/navigation','navigation');
Route::view('/login','login');

