 @include('layouts.defaultheader')

    @guest

       <title>Welcome To EverGalax - Login</title>
    @else

    @endguest
    
</head>
<body style="background-color: #f2f2f2;">


    <div id="container-fluid">

        <!-- Header-->
        <div id="header">   
            <div class ="container">
                                             
                <!--Logo-->
                <div class="col-sm">
                    <a href="{{ url('/') }}"><img src="{{ URL::asset('images/Logo Name.png') }}" width="200px" height="33px" alt="EverGalax" id="eg-logo" style="position: fixed;"></a>
                </div>

                
                <!-- Right Menu's-->
                <div class="col-sm">
                                    
                    <ul id="right-side-header">

                        <li class="list-right-side">
                            <a href="#section-1" id="header-cnt"><p class="list-font">FAQ</span></a>
                        </li>

                        <li class="list-right-side">
                            <a href="{{ route('register') }}" id="header-signup"><p class="list-font">Signup<i class="line"></i></p></a>
                        </li>

                        <li class="list-right-side">
                            <a href="{{ route('login') }}" id="header-login"><p class="list-font">Login<i class="line"></i></p></a>
                        </li>
                    </ul>
                </div>
            </div> 
        </div> 
                        
                    
        <!-- Main-->
        <!-- Section 1-->

        @yield('content')
    

    <!-- Scripts -->

</body>
</html>
