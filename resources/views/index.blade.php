@extends('layouts/master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/index.css">
</head>

<body class="bg-white">
    {{-- @include("navigation"); --}}
    @section('index')
    <div class="images">
        <div class="box-border bg-gradient-to-r from-black p1">
           <div class="text-large box-border text-white">
               <img src="Images/white-logo.png" alt="logo images" class="t0">
             
           </div>
           <div class="text-small box-border text-white">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, itaque non modi assumenda in maxime repellendus minima reprehenderit distinctio dolore, dolorum ut adipisci architecto aliquam velit iure quo! Doloribus, doloremque?
         </div>
        </div>
      </div>

    {{-- item cart start --}}
<div class="first flex flex-wrap justify-center align-middle w-full ">
@foreach ($data as $d)
    <div class="hover flex-col justify-around">
    <div class="max-w-sm bg-zinc-200 border flex-col w-96 rounded-lg shadow op">
        <div href="#" class="items-center flex p-8">
            <img class=" rounded-md align-middle h-56 " width="400px" src="product_pic/{{$d['product_images']}}" alt="product image" />
        </div>
        <div class="px-5 pb-5">
            <a href="{{URL::to("/")}}/items/{{$d['product_id']}}">
                <h5 class="text-xl font-semibold tracking-tight  dark:text-black">{{$d['product_name']}}</h5>
            </a>
                <p class="font-semibold tracking-tight text-black dark:text-blue-600">Remaining only {{$d['product_quantity']}} items</p>
            
            <div class="flex items-center justify-between">
                <span class="text-3xl font-bold text-black">₹{{$d['product_price']}}</span>
                <a href="{{URL::to('/')}}/add-cart/{{$d['product_id']}}" class="text-white    bg-black hover:bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-500 btn-hover">Add to cart</a>
                {{-- <a href="cart"><Button class="add-to-cart" type="submit">Add to Cart</Button></a> --}}
            </div>
        </div>
    </div>
    </div>
@endforeach
</div>
{{-- item cart end --}}
@endsection
</body>

</html>