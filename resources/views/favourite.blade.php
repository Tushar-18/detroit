@extends('layouts/master')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>favourite</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/index.css">
</head>

<body class="bg-white">
    {{-- @include("navigation"); --}}
    @section('index')
        {{-- item cart start --}}
        <div class="first flex flex-wrap justify-center align-middle w-full ">
            @foreach ($data as $d)
                <div class="hover flex-col justify-around">
                    <div class="max-w-sm bg-zinc-200 border flex-col w-96 rounded-lg shadow op">
                        <div href="#" class="items-center flex p-8">
                            <img class=" rounded-md align-middle h-56 " width="400px"
                                src="{{URL::to('/')}}/product_pic/{{ $d['product_pic'] }}" alt="product image" />
                        </div>
                        <div class="px-5 pb-5">
                            <a href="items">
                                <h5 class="text-xl font-semibold tracking-tight  dark:text-black">{{ $d['product_name'] }}
                                </h5>
                            </a>
                            {{-- <p class="font-semibold tracking-tight text-black dark:text-red-600">Remaining only
                                {{ $d['product_quantity'] }} items</p> --}}
                            
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold text-black">₹{{ $d['order_price'] }}</span>
                                <a href="{{URL::to('/')}}/addtofavourite/{{$d['product_id']}}"
                                    class="text-white    bg-black hover:bg-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-500 btn-hover">Remove</a>
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
