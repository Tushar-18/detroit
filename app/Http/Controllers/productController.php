<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function add_product(Request $req) {
        $product_pic_name = uniqid() . $req->file('product_images')->getClientOriginalName();
        $req->product_images->move('product_pic',$product_pic_name);

        $reg= new Products();
        $reg->product_name = $req->product_name;
        $reg->product_price = $req->product_price;
        $reg->product_catagory = $req->product_catagory;
        $reg->product_images = $product_pic_name;
        $reg->product_quantity = $req->product_quantity;
        $reg->product_brand = $req->product_brand;
        $reg->product_description = $req->product_description;
        if ($reg->save()) {
            session()->flash('succ', 'Data saved successfully');
        } else {
            session()->flash('err', 'error in saving data');
        }
        $data = Products::select()->get();
        return view('index',compact('data'));
    }
    public function products(){
        $data = Products::select()->get();
        return view('index',compact('data'));
    }
    public function cart_in(Request $req){
      
    }
}
