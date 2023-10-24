<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/cart.css">
  @vite('resources/css/app.css')
</head>
<body class="bg-zinc-900">
  <!-- component -->
<div class="flex flex-col md:flex-row w-screen h-full px-14 py-7">

    <!-- My Cart -->
    <div class="w-full flex flex-col h-fit gap-4 p-4 ">
        <p class="text-white text-xl font-extrabold">My cart</p>

        <!-- Product -->
        @foreach ($data as $d)
            <div class="flex flex-col p-4 text-lg font-semibold shadow-md  rounded-3x border-black rounded-sm bg-zinc-700">
            <div class="flex flex-col md:flex-row gap-3 justify-between">
                <!-- Product Information -->
                <div class="flex flex-row gap-6 items-center">
                    <div class="w-28 h-28">
                        <img class="w-full h-full" src="{{URL::to('/')}}/product_pic/{{$d['product_images']}}">
                    </div>
                    <div class="flex flex-col gap-1">
                        <p class="text-lg text-white font-semibold">{{$d['product_name']}}</p>
                        <p class="text-xs text-white font-semibold"><span class="font-normal">{{$d['product_brand']}}</span></p>
                        <p class="text-xs text-white font-semibold">{{$d['product_catagory']}}</span></p>
                    </div>
                </div>
                <!-- Price Information -->
                <div class="self-center text-center ml-28">
                    <p class="text-white font-normal text-sm line-through">$99.99
                        <span class="text-emerald-500 ml-2">(-50% OFF)</span>
                    </p>
                    <p class="text-white font-normal text-xl ">₹{{$d['product_price']}}</p>
                </div>
                <!-- Remove Product Icon -->
                <div class="self-center">
                    <a href="{{URL::to('/')}}/drop/{{$d['product_id']}}" class="transition-colors text-sm bg-red-600 hover:bg-red-700 p-2 rounded-sm w-24 text-white text-hover shadow-md btn-hover">
                        Cancel  
                </a>
                </div>
            </div>
            <!-- Product Quantity -->
            <div class="flex flex-row self-center gap-1">
                <a href="{{URL::to('/')}}/decrease/{{$d['product_id']}}/{{$d['product_quantity']}}" class="w-5 h-5 self-center rounded-full border border-gray-300 decrement">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#d1d5db" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" />
                    </svg>
                </a>
                <input type="text" readonly="readonly" value="{{$d['product_quantity']}}" class="w-8 h-8 text-center bg-zinc-600 text-black text-sm outline-none border border-gray-300 rounded-sm">
                <a href="{{URL::to('/')}}/increase/{{$d['product_id']}}/{{$d['product_quantity']}}" class="w-5 h-5 self-center rounded-full border border-gray-300  increment">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="" stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                </a>
            </div>
            @if (session()->has("quantityfull"))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-1 rounded relative w-96 self-center" role="alert">
  <span class="block sm:inline">{{session("quantityfull")}}</span>
  <span class="absolute top-0 bottom-0 right-0 px-4 py-1">
    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
</div>
            @endif
        </div>
        @endforeach
    </div>

    <!-- Purchase Resume -->
    <div class="flex flex-col w-full md:w-2/3 h-fit gap-4 p-4 bg-zinc-700">
        <p class="text-white text-xl font-extrabold">Purchase Resume</p>
        <div class="flex flex-col p-4 gap-4 text-lg font-semibold shadow-md border rounded-sm">
            <div class="flex flex-row justify-between">
                <p class="text-white">Subtotal (2 Items)</p>
                <p class="text-white text-end font-bold">$99.98</p>
            </div>
            <hr class="bg-gray-200 h-0.5">
            <div class="flex flex-row justify-between">
                <p class="text-white">Freight</p>
                <div>
                <p class=" text-white text-end font-bold">$3.90</p>
                <p class="text-white text-sm font-normal">Arrives on Jul 16</p>
                </div>
            </div>
            {{-- <hr class="bg-gray-200 h-0.5">
            <div class="flex flex-row justify-between">
                <p class="text-white">Discount Coupon</p>
                <a class="text-white text-base underline" href="#">Add</a>
            </div> --}}
            <hr class="bg-gray-200 h-0.5">
            <div class="flex flex-row justify-between">
                <p class="text-white">Total</p>
                <div>
                <p class="text-white text-end font-bold">$103.88</p>
                </div>
            </div>
            <div class="flex gap-2">
                <button class="transition-colors text-sm bg-blue-600 hover:bg-blue-700 p-2 rounded-sm w-64 text-white text-hover shadow-md btn-hover">
                        FINISH  
                </button>
                <a href="/">
                <button class="transition-colors text-sm bg-white border border-gray-600 p-2 rounded-sm w-60 text-black text-hover shadow-md btn-hover">
                        ADD MORE PRODUCTS
                </button></a>
            </div>
        </div>
    </div>
</div>

{{-- ruefhberferbhghfdwjnfhbgvdbhsjfghbdfjnhgfdhbjfnvbfd --}}

{{-- <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="p-8 rounded-t-lg" src="/Images/lo.jpg" alt="product image" />
    </a>
    <div class="px-5 pb-5">
        <a href="#">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
        </a>
        <div class="flex items-center mt-2.5 mb-5">
            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20 7.625a1 1.5 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.53 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.5 0 0 0 1 9.2l3 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l 2.375a1.534 1 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.5 0 0 0"/>
            </svg>
            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
        </div>
    </div>
</div> --}}

</body>
</html>