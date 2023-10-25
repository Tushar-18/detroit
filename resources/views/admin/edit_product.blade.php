@extends('../layouts/admin-side-navbar')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
@vite('resources/css/app.css')

</head>
<body>
    @section('content')
  <section class="max-w-4xl p-6 mx-auto w-3/4 bg-indigo-600 rounded-md shadow-md dark:bg-white mt-10">
    <h1 class="text-xl font-bold text-gray-700 capitalize ">Edit Product </h1>
    <form action="{{URL::to('/')}}/admin/admin_update_product" method="post" enctype="multipart/form-data">
      @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <input type="text" name="id" value="{{$d['product_id']}}" class="hidden">
            <div>
                <label class="text-gray-700 " for="username">Pruduct Name</label>
                <input id="username" type="text" name="product_name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:border-gray-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500" value="{{$d['product_name']}}">
                <span style="color:red">
                            @error('product_name')
                                {{ $message }}
                            @enderror
                        </span>
            </div>
            <div>
                <label class="text-gray-700" for="emailAddress">Product Price</label>
                <input id="emailAddress" type="number" name="product_price" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md   dark:border-gray-600 focus:border-zinc-500-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500" value="{{$d['product_price']}}">
                <span style="color:red">
            @error('product_price')
                {{ $message }}
            @enderror
        </span>
            </div>

            <div>
                <label class="text-gray-700" for="password">Product Catagory</label>
                <input id="password" type="text" name="product_catagory" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:border-gray-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500" value="{{$d['product_catagory']}}">
                <span style="color:red">
            @error('product_catagory')
                {{ $message }}
            @enderror
        </span>
            </div>
            <div>
                <label class="text-gray-700" for="password">Product brand</label>
                <input id="password" type="text" name="product_brand" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:border-gray-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500" value="{{$d['product_brand']}}">
                <span style="color:red">
            @error('product_brand')
                {{ $message }}
            @enderror
        </span>
            </div>

            <div>
                <label class="text-gray-700" for="passwordConfirmation">Product Quantity</label>
                <input id="passwordConfirmation" name="product_quantity" type="number" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md   dark:border-gray-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500" value="{{$d['product_quantity']}}">
                <span style="color:red">
            @error('product_quantity')
                {{ $message }}
            @enderror
        </span>
            </div>
            <div>
                <label class="text-gray-700" for="product_description">product description</label>
                <textarea id="product_description" name="product_description" type="textarea" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md   dark:border-zinc-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">{{$d['product_description']}}</textarea>
                <span style="color:red">
            @error('product_description')
                {{ $message }}
            @enderror
        </span>
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Product Images
              </label>
              <div class=" mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md text-white">
                <div class="space-y-1 text-center ">
                  <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600 ">
                    <label for="file-upload" class="relative align- cursor-pointer bg-white rounded-md font-medium text-zinc-600  hover:text-zinc-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-zinc-500">
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="product_images" name="file-upload" type="file" class="sr-only" value="{{$d['product_images']}}">
                    </label>
                   
                  </div>
                  <p class="text-xs text-white">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
              <span style="color:red">
              @error('product_images')
                  {{ $message }}
              @enderror
          </span>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-800 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600 btn-hover">Update</button>
        </div>
    </form>
</section>0
@endsection
</body></html>