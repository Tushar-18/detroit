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
                      <img src="images/keyboard.jpg" class=" w-96 h-96 hover:transition delay-75 duration-300 ease-in-out hover:-translate-y-1" alt="errer">
                </div>
                <div class="second-part pl-14  w-96 text-black">
                      <div class="flex flex-col">
                            <label class="text-5xl">Keyboard</label>
                            <label class="pt-5">Price ₹2900</label>
                            <label class="pt-5">CHONCHOW LED Keyboard and Mouse, 104 Keys Rainbow Backlit Keyboard and 7 Color RGB Mouse, White Gaming Keyboard and Mouse Combo for PC Laptop Xbox PS4 Gamers and Work</label>
                            <label class="text-lg mt-4 ml-4 ">🦖 Great Boss Battles</label>
                            <label class="text-lg m-4">😍 Extremely Fun</label>
                      </div>
                </div>
                <div class="w-96 bg-zinc-400 rounded-3xl ml-16 h-auto p-6">
    
                      <div class="bg-blue-700 items-center flex w-80 h-10 mt-20 mb-20  justify-center rounded-lg text-white hover:bg-blue-800 hover:transition delay-75 duration-300 ease-in-out hover:-translate-y-1"><a href="">BUY NOW</a></div>
    
                      <div class="bg-none border items-center flex w-80 h-10 mt-20 mb-20 justify-center rounded-lg text-white hover:bg-zinc-200/10 hover:transition delay-75 duration-300 ease-in-out hover:-translate-y-1"><a href="">Add to Cart</a></div>
                      
                </div>
          </div>
      </div>
      @endsection
</body>
</html>