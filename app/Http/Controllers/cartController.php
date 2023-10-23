<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Products;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class cartController extends Controller
{
     public function add_cart($product_id){
         if(session()->has('email')){   
                $data = DB::table('carts')
               ->where('user_id', session('user_id'))
               ->where('product_id', $product_id)->get();
               if($data == '[]'){
                    $result = Products::where('product_id', $product_id)->first();
                    $cart = new Cart();
                    $cart->user_id = session('user_id');
                    $cart->product_id = $result['product_id'];
                    $cart->product_name = $result['product_name'];
                    $cart->product_price = $result['product_price'];
                    $cart->product_catagory = $result['product_catagory'];
                    $cart->product_images = $result['product_images'];
                    $cart->product_real_quantity = $result['product_quantity'];
                    $cart->product_brand = $result['product_brand'];
                    $cart->product_description = $result['product_description'];
                    $cart->save();
                    return $this->fetch_cart();

               }
               else{
          $data = Cart::where('user_id', session('user_id'))->where('product_id', $product_id)->get();
          foreach($data as $d){
               $item = $d['product_quantity'];
               $item++;
          }
                    
                    DB::table('carts')
                    ->where('user_id', session('user_id'))
                    ->where('product_id', $product_id)
                    ->update(['product_quantity' => $item]);
                    return $this->fetch_cart();
               }
               
         }
         else{
          return view('login');
         }
     }
     public function fetch_cart(){
          $data = Cart::where('user_id',session('user_id'))->get();
          // $data = Products::where('product_id',1)->get();
          return view('cart',compact('data'));
     }

     public function increase($id , $qua){
          $qua++;
          DB::table('carts')
               ->where('user_id', session('user_id'))
               ->where('product_id', $id)
               ->update(['product_quantity' => $qua]);
          return $this->fetch_cart();
     }
     public function decrease($id , $qua)
     {
          if($qua < 2)
          {
               return $this->drop_cart_item($id);
          }else{

          $qua--;
          DB::table('carts')
               ->where('user_id', session('user_id'))
               ->where('product_id', $id)
               ->update(['product_quantity' => $qua]);
          }
          return $this->fetch_cart();
     }
     public function drop_cart_item($id)
     {
          DB::table('carts')
          ->where('user_id', session('user_id'))
          ->where('product_id', $id)
          ->delete();
          return $this->fetch_cart();
     }
}
