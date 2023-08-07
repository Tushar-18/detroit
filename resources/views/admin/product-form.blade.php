<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
@vite('resources/css/app.css')
</head>
<<<<<<< Updated upstream
<body class="bg-zinc-900">
  <section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-zinc-700 mt-20">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">Add Product </h1>
    <form action="register-action" method="post" enctype="multipart/form-data">
      @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="username">Pruduct Name</label>
                <input id="username" type="text" name="fn" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-gray-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
=======
<body class="product-bg">
  <section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md opacity-95 dark:bg-zinc-300 mt-20">
    <h1 class="text-xl font-bold text-black capitalize dark:text-black">Add Product </h1>
    <form action="product-action" class="opacity-100" method="post" enctype="multipart/form-data">
      @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-black dark:text-black" for="product_name">Pruduct Name</label>
                <input id="username" type="text" name="product_name" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-gray-300 rounded-md dark:bg-zinc-400 dark:text-black focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
>>>>>>> Stashed changes
                <span style="color:red">
                            @error('fn')
                                {{ $message }}
                            @enderror
                        </span>
            </div>
            <div>
<<<<<<< Updated upstream
                <label class="text-white dark:text-gray-200" for="emailAddress">Product Price</label>
                <input id="emailAddress" type="number" name="em" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-gray-600 focus:border-zinc-500-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
=======
                <label class="text-black dark:text-black" for="peoduct_pricr">Product Price</label>
                <input id="emailAddress" type="number" name="product_price" class="block w-full px-4 py-2 mt-2 text-white bg-white border border-gray-300 rounded-md dark:bg-zinc-400 dark:text-black focus:border-zinc-500-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
>>>>>>> Stashed changes
                <span style="color:red">
            @error('em')
                {{ $message }}
            @enderror
        </span>
            </div>

            <div>
<<<<<<< Updated upstream
                <label class="text-white dark:text-gray-200" for="password">Product Catagory</label>
                <input id="password" type="text" name="pwd" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-gray-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
=======
                <label class="text-black dark:text-black" for="product_catagory">Product Catagory</label>
                <input id="password" type="text" name="product_catagory" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-400 dark:text-black focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
>>>>>>> Stashed changes
                <span style="color:red">
            @error('pwd')
                {{ $message }}
            @enderror
        </span>
            </div>

            <div>
<<<<<<< Updated upstream
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Product Quantity</label>
                <input id="passwordConfirmation" name="cpwd" type="number" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-gray-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
=======
                <label class="text-black dark:text-black" for="product_quantity">Product Quantity</label>
                <input id="passwordConfirmation" name="product_quantity" type="number" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-400 dark:text-black focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
>>>>>>> Stashed changes
                <span style="color:red">
            @error('cpwd')
                {{ $message }}
            @enderror
        </span>
            </div>
            <div>
<<<<<<< Updated upstream
                <label class="text-white dark:text-gray-200" for="pin">product_description</label>
                <input id="pin" type="number" name="pin" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 focus:border-blue-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
=======
                <label class="text-black dark:text-black" for="product_description">Product Description</label>
                <input id="pin" type="text" name="product_description" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-400 dark:text-black  focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
>>>>>>> Stashed changes
                <span style="color:red">
            @error('pin')
                {{ $message }}
            @enderror
        </span>
            </div>
<<<<<<< Updated upstream
            {{-- <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">City</label>
                <select name="city" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
                    <option value="">Select City</option>
                    <option value="Rajkot">Rajkot</option>
                    <option value="Surat">Surat</option>
                    <option value="junagadha">junagadha</option>
                    <option value="Upleta">Upleta</option>
                </select>
                <span style="color:red">
            @error('city')
                {{ $message }}
            @enderror
        </span>
            </div> --}}
            {{-- <div>
                <label class="text-white dark:text-gray-200" for="states">States</label>
                <input name="states" id="states" type="text" class="block w-full py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:outline  focus:ring-zinc-500">
                <span style="color:red">
            @error('states')
                {{ $message }}
            @enderror
        </span>
            </div> --}}
            {{-- <div>
                <label class="text-white dark:text-gray-200" for="number">number</label>
                <input id="number" name="num" type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
                <span style="color:red">
            @error('num')
                {{ $message }}
            @enderror
        </span>
            </div> --}}
            {{-- <div>
                <label class="text-white dark:text-gray-200" for="address">Address</label>
                <textarea id="address" name="address" type="textarea" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500"></textarea>
                <span style="color:red">
            @error('address')
                {{ $message }}
            @enderror
        </span>
            </div> --}}
=======
            <div>
               <label class="text-black dark:text-black" for="product_brand">Product Brand</label>
               <input id="pin" type="text" name="product_brand" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-black border border-gray-300 rounded-md dark:bg-zinc-400 dark:text-black focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
               <span style="color:red">
           @error('product_brand')
               {{ $message }}
           @enderror
       </span>
           </div>
            
>>>>>>> Stashed changes
            <div>
                <label class="block text-sm font-medium text-black">
                    Product Images
              </label>
              <div class=" mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-700 border-dashed rounded-md dark:bg-zinc-400">
                <div class="space-y-1 text-center ">
                  <svg class="mx-auto h-12 w-12 text-black" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600 ">
<<<<<<< Updated upstream
                    <label for="file-upload" class="relative align- cursor-pointer bg-white rounded-md font-medium text-zinc-600  hover:text-zinc-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-zinc-500">
=======
                    <label for="file-upload" class="relative cursor-pointer bg-zinc-500 rounded-md font-medium text-zinc-800 p-2 hover:text-zinc-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-zinc-500">
>>>>>>> Stashed changes
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="pic" name="file-upload" type="file" class="sr-only">
                    </label>
                   
                  </div>
                  <p class="text-xs text-black">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
              <span style="color:red">
              @error('pic')
                  {{ $message }}
              @enderror
          </span>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-800 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600 btn-hover">Add Product</button>
        </div>
    </form>
</section>

 