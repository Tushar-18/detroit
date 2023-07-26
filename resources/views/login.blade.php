<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<!-- component -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
<style>
	/* body{
			background-image: url("../Images/lo.jpg");	
			background-size: cover;
	} */
</style>
</head>
<body class="my-custom-bg-class">
<!-- component -->
<div class="min-h-screen  py-6 flex flex-col justify-center sm:py-12 ">
	<div class="relative py-3 sm:max-w-xl sm:mx-auto">
		<div
			class="absolute inset-0 bg-gradient-to-r from-red-300 to-red-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<div>
					<h1 class="text-2xl font-semibold">Login Form with Floating Labels</h1>
				</div>
				<div class="divide-y divide-gray-200">
					<div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
						<div class="relative">
							<input autocomplete="off" id="email" name="email" type="text" class="  h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none " placeholder="Email address" />
							
						</div>
						<div class="relative">
							<input autocomplete="off" id="password" name="password" type="password" class=" placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
							
						</div>
						<div class="relative">
							<button class="bg-red-500 text-white rounded-md px-2 py-1">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>