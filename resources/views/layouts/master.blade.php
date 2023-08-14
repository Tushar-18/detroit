<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css');
    <link rel="stylesheet" href="css/nav.css">

</head>
<div class="container-main">
    <header class="header active">
        <div class="logo"><img src="Images/black-logo.png" alt="error"></div>
        <nav class="nav">
            <ul class="c1">
                <li><a href="">Home</a></li>
                <li style="display: flex;">PC Component <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg></span>



                    <ul>
                        <li><a href="Motherboard">Motherboard</a></li>
                        <li><a href="Graphics">Graphics Card</a> </li>
                        <li><a href="Processor">Processor</a></li>
                        <li><a href="Ram">Ram</a></li>
                        <li><a href="Rom">Rom</a></li>
                        <li><a href="PSU">PSU</a></li>
                        <li><a>Cooling</a></li>
                    </ul>
                </li>
                {{-- <li><a href="">Engine</a></li> --}}
            </ul>
        </nav>
        <div class="profile">
            @if(session()->has('email'))
                <div class="cart px-3"><a href="cart"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </a>
        </div>
        <div class="pro-in ">
            <img class="border border-slate-600" src="profile_pic/{{session('pic')}}" alt="error" id="signin">
        </div>
        <label for="signin" style="margin-right: 10px">{{session('name')}}</label>
        
<div class="border-l-2 h-10 border-slate-600"></div>
        <div class="log bg-white px-1"><a href="logout">Logout</a></div>
            @else
                <label for="Login" style="margin-right: 10px"><a href="login">Login</a></label>
        @endif
            
            <div class="menutoggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>
</div>
<script src="js/nav.js"></script>
{{-- end navigation --}}



@yield('index')



{{-- start footer --}}
<footer class="w-full text-gray-700 bg-zinc-300 body-font">
    <div
        class="container flex align-middle flex-wrap px-8 py-8 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
        <div class="flex-shrink-0 w-64 mx-auto mt-20 text-center md:mx-0 md:text-left">
            <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
               <img src="images/black-logo.png" alt="error">
            </a>
            <p class="mt-2 text-sm text-black">Pc components, Keyboard and Mouse</p>
            <div class="mt-4">
                <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                    <a class="text-black cursor-pointer hover:text-gray-300">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-black cursor-pointer hover:text-gray-300">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-black cursor-pointer hover:text-gray-300">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-black cursor-pointer hover:text-gray-300">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
        <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
            <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                <h2 class="mb-3 text-sm font-medium tracking-widest text-black uppercase title-font ml-6">Cp Components
                </h2>
                <nav class="mb-10 list-none flex flex-col">
                    <li class="mt-3">
                        <a class="text-black cursor-pointer hover:text-gray-400">Motherborard</a>
                    </li>
                    <li class="mt-3">
                        <a class="text-black cursor-pointer hover:text-gray-400">Graphics Card</a>
                    </li>
                    <li class="mt-3">
                        <a class="text-black cursor-pointer hover:text-gray-400">Processor</a>
                    </li>
                    <li class="mt-3">
                        <a class="text-black cursor-pointer hover:text-gray-400">RAM</a>
                    </li>
                    <li class="mt-3">
                        <a class="text-black cursor-pointer hover:text-gray-400">ROM</a>
                    </li>
                    <li class="mt-3">
                        <a class="text-black cursor-pointer hover:text-gray-400">PSU</a>
                    </li>
                    <li class="mt-3">
                        <a class="text-black cursor-pointer hover:text-gray-400">Cooling</a>
                    </li>
                </nav>
            </div>
            <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                <h2 class="mb-3 text-sm font-medium tracking-widest text-black uppercase title-font ml-12">Contact</h2>
                <nav class="mb-10 list-none flex flex-col">
                    <li class="mt-3">
                        <a class="text-black cursor-pointer hover:text-gray-400">Send a Message</a>
                    </li>
                    <li class="mt-3">
                        <a class="text-black cursor-pointer hover:text-gray-400">Request a Quote</a>
                    </li>
                    <li class="mt-3">
                        <a class="text-black cursor-pointer hover:text-gray-400">+91 9638051095</a>
                    </li>
                </nav>
            </div>
        </div>
    </div>

</footer>