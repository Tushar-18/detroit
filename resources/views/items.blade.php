@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     @vite('resources/css/app.css')
</head>
@section('index')
     <body class="bg-white">
      <div class="p-20">
          <div class="bg-gray-300   w-auto h-auto p-20 flex rounded-lg">      
                <div class="first-part">
                      <img src="{{URL::to("/")}}/product_pic/{{$data['product_images']}}" class=" w-96 h-96 " alt="errer">
                </div>
                <div class="second-part pl-14  w-96 text-black">
                      <div class="flex flex-col">
                            <label class="text-5xl">{{$data['product_name']}}</label>
                            <label class="pt-5">Price ₹{{$data['product_price']}}</label>
                            <label class="pt-5">{{$data['product_description']}}</label>
                            <label class="text-lg mt-4 text-green-600">Quantity {{$data['product_quantity']}}</label>
                            <label class="text-lg ">Brand {{$data['product_brand']}}</label>
                      </div>
                </div>
                <div class="w-96 bg-zinc-400 rounded-3xl ml-16 h-auto p-6">
    
                      <div class="bg-blue-700 items-center flex w-80 h-10 mt-20 mb-20  justify-center rounded-lg text-white hover:bg-blue-800 hover:transition delay-75 duration-300 ease-in-out hover:-translate-y-1"><a href="{{URL::to('/')}}/buy/{{$data['product_id']}}">BUY NOW</a></div>
    
                      <div class="bg-none border items-center flex w-80 h-10 mt-20 mb-20 justify-center rounded-lg text-white hover:bg-zinc-200/10 hover:transition delay-75 duration-300 ease-in-out hover:-translate-y-1"><a href="">Add to Cart</a></div>
                      
                </div>
          </div>
      </div>
      @endsection
</body>
</html>