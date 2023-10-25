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

<body>
    @section('index')
        <div class="isolate bg-white px-6 sm:py-32 lg:px-8">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
                aria-hidden="true">
            </div>
            <form action="{{URL::to('/')}}/update_users" method="POST" enctype="multipart/form-data" class="mx-auto mt-16 max-w-xl sm:mt-20">
                @csrf
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div class="sm:col-span-2">
                        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Name</label>
                        <div class="mt-2.5">
                            <input type="text" name="fn" id="company" autocomplete="organization"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$d['user_name']}}">
                        </div>
                        <span style="color:red">
                        @error('fn')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                        <div class="mt-2.5">
                            <input type="email" name="em" id="company" autocomplete="organization"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$d['user_email']}}" readonly>
                        </div>
                        <span style="color:red">
                        @error('em')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Address</label>
                        <div class="mt-2.5">
                            <textarea name="address" id="message" rows="4"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$d['user_address']}}">{{$d['user_address']}}</textarea>
                        </div>
                        <span style="color:red">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">City</label>
                        <div class="mt-2.5">
                            <input type="text" name="city" 
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$d['user_city']}}">
                        </div>
                        <span style="color:red">
                        @error('city')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Mobile
                            number</label>
                        <div class="mt-2.5">
                            <input type="number" name="num" 
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$d['user_number']}}">
                        </div>
                        <span style="color:red">
                        @error('num')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="flex gap-x-4 sm:col-span-2">
                        
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">States</label>
                        <div class="mt-2.5">
                            <input type="text" name="states" 
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$d['user_states']}}">
                        </div>
                        <span style="color:red">
                        @error('states')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Pincode</label>
                        <div class="mt-2.5">
                            <input type="number" name="pin" 
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$d['user_pincode']}}">
                        </div>
                        <span style="color:red">
                        @error('pin')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Profile
                            Picture</label>
                        <div class="mt-2.5">
                            <input type="file" name="pic" 
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$d['user_pic']}}">
                        </div>
                        <span style="color:red">
                        @error('pic')
                            {{ $message }}
                        @enderror
                    </span>
                    </div>
                </div>
               
                <div >
                    <button type="submit"
                        class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
                <label for="" class="text-blue-600"><a href="change_password">change password</a></label>
            </form>
        </div>
    @endsection
</body>

</html>
