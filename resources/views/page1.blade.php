<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
@vite('resources/css/app.css')

</head>
<body class="bg-zinc-900">
  <section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-zinc-700 mt-20">
    <h1 class="text-xl font-bold text-white capitalize dark:text-white">Account settings</h1>
    <form>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="username">Username</label>
                <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-gray-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="emailAddress">Email Address</label>
                <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-gray-600 focus:border-zinc-500-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="password">Password</label>
                <input id="password" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-gray-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Password Confirmation</label>
                <input id="passwordConfirmation" type="password" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-gray-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Pincode</label>
                <input id="color" type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 focus:border-blue-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">City</label>
                <select class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
                    <option value="">Select City</option>
                    <option value="Rajkot">Rajkot</option>
                    <option value="Surat">Surat</option>
                    <option value="junagadha">junagadha</option>
                    <option value="Upleta">Upleta</option>
                </select>
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Stats</label>
                <input id="range" type="text" class="block w-full py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:outline  focus:ring-zinc-500">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Date</label>
                <input id="date" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500">
            </div>
            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Address</label>
                <textarea id="textarea" type="textarea" class="block w-full px-4 py-2 mt-2 text-zinc-700 bg-white border border-gray-300 rounded-md dark:bg-zinc-600 dark:text-gray-300 dark:border-zinc-600 focus:border-zinc-500 dark:focus:border-zinc-500 focus:outline-none focus:ring focus:ring-zinc-500"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-white">
                Image
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-none rounded-md dark:bg-zinc-600">
                <div class="space-y-1 text-center ">
                  {{-- <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg> --}}
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-zinc-600 hover:text-zinc-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-zinc-500">
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1 text-white">or drag and drop</p>
                  </div>
                  <p class="text-xs text-white">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-800 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
    </form>
</section>

 