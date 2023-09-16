<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use App\Models\Products;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;


class cartController extends Controller
{
     public function add_cart($product_id){
         if(session()->has('email')){
               $result = Products::where('product_id', $product_id)->first();
               $cart = new Cart();
               $cart->user_id = session('user_id');
               $cart->product_id = $result['product_id'];
               $cart->product_quantity = $result['product_quantity'];
               $cart->save();
         }
         else{
          return view('login');
         }
     }
     public function join()
     {
          $mem = new Members();
          $pro = new Products();


     }
}
