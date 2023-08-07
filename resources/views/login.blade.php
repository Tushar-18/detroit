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
			class="absolute inset-0 bg-gradient-to-r from-blue-300/50 to-blue-500/50 shadow-lg transform -skew-y-12 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-blue-300 backdrop-blur-sm shadow-lg sm:rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<div>
					<h1 class="text-2xl font-semibold">Login with your detroit account</h1>
				</div>
				<form action="{{URL::to('/')}}/login-action" method="post">
					@csrf
				<div class="divide-y divide-gray-200">
					<div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
						<div class="relative">
							<input autocomplete="off" id="email" name="email" type="text" class="  h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none rounded placeholder-zinc-800" placeholder="Email address" />
							

							
						</div>
						<div class="relative">
							<input autocomplete="off" id="email" name="pwd" type="Password" class="  h-10 w-full border-b-2 placeholder-zinc-800 border-gray-300 text-gray-900 focus:outline-none rounded " placeholder="Password" />	
						</div>
						<div class="relative">
							don't have account <a href="register" class="text-blue-600">Create account</a>	
						</div>
						<div class="relative">
							<button class="text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-800 dark:focus:ring-blue-500 btn-hover ">Login</button>
						</div>

					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>