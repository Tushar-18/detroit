    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css');
        <link rel="stylesheet" href="css/nav.css">

    </head>
    <div class="container-main">
        <header class="header active">
            <div class="logo"><img src="Images/logo.png" alt="error"></div>
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
                @if(){

                }@else{

                }@endif
                <div class="cart px-3"><a href="cart"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </a>
                </div>
                <div class="pro-in">
                    <img src="Images/default.jpg" alt="error" id="signin">
                    <div class="log bg-white px-1"><a href="logout">Logout</a></div>
                </div>
                <label for="signin" style="margin-right: 10px">Name</label>
                <div class="menutoggle">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </header>
    </div>
    <script src="js/nav.js"></script>