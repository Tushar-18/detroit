<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Edit Member</title>
@vite('resources/css/app.css')

</head>
<body class="">
  <section class="max-w-4xl p-6 mx-auto  rounded-md shadow-md  mt-20">
    <h1 class="text-xl font-bold  capitalize text-gray-700 ">Edit Member</h1>
    <form action="register-action" method="post" enctype="multipart/form-data">
      @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="" for="username">fullname</label>
                <input id="username" type="text" name="fn" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:border-gray-600 focus:border-blue-600 focus:outline-none focus:ring focus:ring-blue-600">
                <span style="color:red">
                            @error('fn')
                                {{ $message }}
                            @enderror
                        </span>
            </div>
            <div>
                <label class="" for="emailAddress">Email Address</label>
                <input id="emailAddress" type="email" name="em" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border  rounded-md  dark:border-gray-600 focus:border-blue-600 focus:outline-none focus:ring focus:ring-blue-600">
                <span style="color:red">
            @error('em')
                {{ $message }}
            @enderror
        </span>
            </div>

            <div>
                <label class="" for="password">Password</label>
                <input id="password" type="password" name="pwd" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border  rounded-md dark:border-gray-600 focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-600">
                <span style="color:red">
            @error('pwd')
                {{ $message }}
            @enderror
        </span>
            </div>

            <div>
                <label class="" for="passwordConfirmation">Password Confirmation</label>
                <input id="passwordConfirmation" name="cpwd" type="password" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md   dark:border-gray-600 focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-600">
                <span style="color:red">
            @error('cpwd')
                {{ $message }}
            @enderror
        </span>
            </div>
            <div>
                <label class="" for="pin">Pincode</label>
                <input id="pin" type="number" name="pin" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:border-zinc-600 focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-600">
                <span style="color:red">
            @error('pin')
                {{ $message }}
            @enderror
        </span>
            </div>
            <div>
                <label class="" for="passwordConfirmation">City</label>
                <select name="city" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:border-zinc-600   focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-600">
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
            </div>
            <div>
                <label class="" for="states">States</label>
                <input name="states" id="states" type="text" class="block w-full py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md  dark:border-zinc-600 focus:border-blue-500  focus:outline-none focus:ring focus:outline  focus:ring-blue-600">
                <span style="color:red">
            @error('states')
                {{ $message }}
            @enderror
        </span>
            </div>
            <div>
                <label class="" for="number">number</label>
                <input id="number" name="num" type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md  dark:border-gray-600 focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-600">
                <span style="color:red">
            @error('num')
                {{ $message }}
            @enderror
        </span>
            </div>
            <div>
                <label class="" for="address">Address</label>
                <textarea id="address" name="address" type="textarea" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md  dark:border-zinc-600 focus:border-blue-500  focus:outline-none focus:ring focus:ring-blue-600"></textarea>
                <span style="color:red">
            @error('address')
                {{ $message }}
            @enderror
        </span>
            </div>
            <div>
                <label class="block text-sm font-medium ">
                Image
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-700 border-dashed rounded-md  ">
                <div class="space-y-1 text-center ">
                    <svg class="mx-auto h-12 w-12 " stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-zinc-600 hover:text-zinc-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-600">
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="pic" name="file-upload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1 ">or drag and drop</p>
                  </div>
                  <p class="text-xs ">
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
            <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-800 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600">Add Members</button>
        </div>
    </form>
</section>

 