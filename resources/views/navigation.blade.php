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
                    <li style="display: flex;">PC Component <span><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg></span>



                        <ul>
                            <li><a href="Motherboard">Motherboard</a></li>
                            <li><a href="Graphics">Graphics Card</a> </li>
                            <li><a href="Processor">Processor</a></li>
                            <li><a href="Ram">Ram</a></li>
                            <li><a href="Rom">Rom</a></li>
                            <li><a href="PSU">PSU</a></li>
                            <li style="display: flex;margin-left: 15px;">Cooling 

                                
                            </li>
                        </ul>
                    </li>
                    {{-- <li><a href="">Engine</a></li> --}}
                </ul>
            </nav>
            <div class="profile">
                <div class="pro-in">
                    <img src="Images/default.jpg" alt="error" id="signin">
                    <div class="log bg-white px-1"><a href="logout">Login</a></div>
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

