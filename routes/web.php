<?php

use App\Http\Controllers\admincontroler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberscontrollers;
use App\Http\Controllers\productController;
use App\Http\Controllers\cartController;
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
Route::view('/index','index');
Route::view('/register','register');
Route::view('/navigation','navigation');
Route::post('/register-action',[memberscontrollers::class,'add_users']);
Route::view('/login','login');
Route::get('/logout',[memberscontrollers::class,'logout']);
Route::post('/login-action',[memberscontrollers::class,'login']);
Route::view('/cart/{cart_id}','cart'); 
Route::view('/cart','cart'); 
Route::get('/cart',[cartController::class,'fetch_cart']);
Route::get('/cart_order', [cartController::class, 'cart_order']);
Route::view('/footer','footer');
Route::view('/reset_pwd','reset_pwd');
Route::view('/product-details','product-details');
Route::view("admin.product-form","admin/product-form");
Route::get("items/{id}",[productController::class, "items"]);
Route::get("favourite",[productController::class, "myfavourite"]);
Route::get("addtofavourite/{id}",[productController::class, "favourite"]);
Route::get("add-cart/{product_id}",[cartController::class,'add_cart']);
Route::view("catagories", "catagories");
Route::get("catagorie/{cat_id}",[productController::class, 'fetch_cat']);
Route::view('edit_profile', 'edit_profile');
Route::get('account_activation/{email}', [memberscontrollers::class, 'account_activation']);
Route::get('/decrease/{id}/{qua}', [cartController::class, 'decrease']);
Route::get('/increase/{id}/{qua}', [cartController::class, 'increase']);
Route::get('/drop/{id}/', [cartController::class, 'drop_cart_item']);
Route::get("orders",[productController::class, 'myorders']);
Route::get("buy/{id}",[productController::class, 'order']);
// Route::get("orders",[productController::class, 'orders']);
Route::view("change_password","change_password");
Route::post("change_pwd",[memberscontrollers::class,'change_pwd']);
Route::post('update_users',[memberscontrollers::class, 'update_users']);
Route::get('edit_users/{id}',[memberscontrollers::class, 'edit_users']);
// Admin
// Route::view('/admin/dashboard','/admin/dashboard');
Route::get('/admin/dashboard',[memberscontrollers::class,'fech_user']);
Route::view("admin/product-form","admin/product-form");
Route::post("admin/product-action",[productController::class,'add_product']);
Route::view("admin/product","admin/admin-product");
Route::get("admin/product",[productController::class,'products']);
Route::get("/status/{id}",[productController::class,'status_product']);
Route::get("/user_status/{id}",[memberscontrollers::class,'status_users']);
Route::view("admin/edit_userprofile", "admin/edit_userprofile");
Route::view("admin/add_user", "admin/add_user");
Route::get("admin/edit_product/{id}", [admincontroler::class, 'edit_product']);
Route::post("admin/admin_update_product", [admincontroler::class, 'admin_update_product']);
Route::get("/edit_member/{id}", [admincontroler::class, 'edit_users']);
Route::post("/admin_update_users", [admincontroler::class, 'admin_update_users']);
Route::get("/admin_delete_product/{id}", [admincontroler::class, 'delete_product']);
Route::view("/edit_member","admin/admin_edit_member");
Route::get("/delete_member",[admincontroler::class,'delete_member']);
Route::get("/delete_product/{id}",[admincontroler::class,'delete_product']);
Route::get("/admin/admin_orders",[productController::class,'fetch_orders']);
