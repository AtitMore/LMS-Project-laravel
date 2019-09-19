 @include('layouts.defaultheader')


        <!-- Styles -->
         @if (Route::has('login'))
            
            @auth
                <title>EverGalax</title>
                 
            @else
                <title>Welcome To EverGalax</title>

            @endauth
        @endif
        
        
       
    </head>
    <body>
        @if (Route::has('login'))
            
            @auth
         <div id="containers">
            <div class="header">
                <div class="header-container clearfix wrapper"> 
                    <div class="logo-posi">
                        <a class="navbar-brands" href="{{ url('/') }}">
                            <img src="{{ asset('images/EverGalax Logo.png') }}" width="40px" height="40px" alt="EverGalax" id="eg-logo" style="position: fixed;">
                        </a>
                    </div>

                    <div class="header-search">
                        <div class="search-box">
                            <form method="get" role="search" action="">
                                <input type="search" name="query" class="search-control" placeholder="Search people, live events, videos, learning"></input>
                        
                        </div>
                            <button type="submit" class="search-btn">Search</button>
                        </form>  
                    </div>    
                    
                        
                    <ul id="header-nav">
                        <li class="header-nav-item dropdown res-nav-item">
                            <a href="#" onclick="showdropdown()" class="dropdown-btn">
                                <i class="fa fa-chevron-down fa-head-fcolor">
                                    <ul id="menu" onclick="hidedropdown()" class="dropdown-content">
                                        <li>Create Page</li>
                                        <li>Create Group</li>
                                        <li>New Groups</li><hr class="dropdown-hr">
                                        <li>Create Ads</li>
                                        <li>Advertising on EverGalax</li><hr class="dropdown-hr">
                                        <li>Activity Log</li>
                                        <li>News Feed Preferences</li>
                                        <li><a href="">Settings</a>
                                        </li><hr class="dropdown-hr">
                                        <li>Help</li>
                                        <li>Support Inbox</li>
                                        <li>Report a Problem</li><hr class="dropdown-hr">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </i>
                            </a>
                        </li>

                        <li class="header-nav-item res-nav-item">
                            <i class="fa fa-cog fa-head-fcolor"></i>
                        </li>
                    
                        <li class="header-nav-item">
                            <i class="fa fa-graduation-cap fa-head-fcolor"></i>
                        </li>
        
                        <li class="header-nav-item">
                            <i class="fa fa-bell-o fa-head-fcolor"></i>
                        </li>
                            
                        <li class="header-nav-item">
                            <i class="fa fa-envelope-o fa-head-fcolor"></i>
                        </li>
                    
                        <li class="header-nav-item">
                            <i class="fa fa-user-plus fa-head-fcolor"></i>
                        </li>

                        <li class="header-nav-item">
                            <a href="{{ route ('home') }}">
                                <i class="fa fa-home fa-head-fcolor" style="margin-left: 20px;"></i>
                            </a>
                        </li>
        
                        <li class="header-nav-item">
                            <a href="{{ Auth::user()->slug }}" class="fa-head-fcolor">Welcome {{ Auth::user()->getFirstnameOrUsername() }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!--Body-->
            <div class="body-container clearfix">

            <!--Section 1 -->
                <div class="section-1">
                    <div class="section-new">
                        <div class="section-new-header">
                            <h4 class="col-sec">Add New ...</h4>
                        </div>
                        <div class="section-new-body">
                            <ul class="body-nav">
                                <li class="body-nav-items"><a href="">Write a Blog</a></li>
                                <li class="body-nav-items"><a href="#">Record a video</a></li>
                                <li class="body-nav-items"><a href="#">Broadcast live video</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="section-new">
                        <div class="section-new-header">
                            <h4  class="col-sec">Events ...</h4>
                        </div>
                        <div class="section-new-body">
                            <ul class="body-nav">
                                <li class="body-nav-items">Event1 ...</li>
                                <li class="body-nav-items">Event2 ...</li>
                                <li class="body-nav-items">Event3 ...</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="section-2">
                    <div class="section-new">
                        <div class="section-new-body status-box">
                            <div class="post-usrimg">
                                <img src="" height="36px" width="33px" class="status-image">
                            </div>   

                            <div class="cols-lg">
                                <form method="Post" action="" class="status_form">
                                {{ csrf_field() }}
                                    <textarea rows="1" placeholder="Share What is happening with you..." class="status-control {{ $errors->has('email') ? ' error-field' : '' }}" name="body"></textarea><br>
                                        @if ($errors->has('status'))
                                        <span style="color: #ff3860;">{{ $errors->first('status') }}</span>    
                                        @endif 
                                     <ul class="status-pills">
                                        <li class="fa fa-camera-retro"></li>
                                        <li class="fa fa-video-camera"></li>
                                        <li class="fa fa-map-marker"></li>
                                        <li class="fa fa-cog"></li>
                                        <li class="fa fa-angle-double-down"></li>
                                        <li class="status-post" style="float: right;">
                                            <button type="submit" class="sub_status">Post</button>
                                        </li>
                                    </ul>
                                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                                </form>
                            </div>    
                        </div>
                    </div>

                    <div class="section-new">
                        <div class="tab-container">
                            <ul class="tabs">
                                <li class="current"><a href="#tabs-1">Social Feed</a></li>
                                <li class="current-1"><a href="#tabs-2">Learning Feed</a></li>
                                <li class="current-2"><a href="#tabs-3">Live Feed</a></li>
                                <li class="current-3"><a href="#tabs-4">University Feed</a></li>
                            </ul>

                            <div id="tabs-1" class="tab-content">
                                <div class="section-new">
                                    <div class="timeline">
                                        <div class="section-new-body">
                                            <ul class="body-nav-feeds">      
                                                <li class="body-nav-items">
                                                Learning Feed 1 ...                                                
                                            </li>
                                            <li class="body-nav-items">Learning Feed 2 ...</li>
                                            <li class="body-nav-items">Learning Feed 3 ...</li>            
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tabs-2" class="tab-content" style="display: none;">
                                <div class="section-new">
                                    <div class="section-new-body">
                                        <ul class="body-nav">
                                            <li class="body-nav-items">
                                                Learning Feed 1 ...                                                
                                            </li>
                                            <li class="body-nav-items">Learning Feed 2 ...</li>
                                            <li class="body-nav-items">Learning Feed 3 ...</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="tabs-3" class="tab-content" style="display: none;">
                                <div class="section-new">
                                    <div class="section-new-body">
                                        <ul class="body-nav">
                                            <li class="body-nav-items">Live Feed 1 ...</li>
                                            <li class="body-nav-items">Live Feed 2 ...</li>
                                            <li class="body-nav-items">Live Feed 3 ...</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="tabs-4" class="tab-content" style="display: none;">
                                <div class="section-new">
                                    <div class="section-new-body">
                                        <ul class="body-nav">
                                            <li class="body-nav-items">University Feed 1 ...</li>
                                            <li class="body-nav-items">University Feed 2 ...</li>
                                            <li class="body-nav-items">University Feed 3 ...</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="section-3">
                    <div class="section-new">
                        <div class="section-new-header">
                            <h4  class="col-sec">Add New ...</h4>
                        </div>
                        <div class="section-new-body">
                            <ul class="body-nav">
                                <li class="body-nav-items">Write ...</li>
                                <li class="body-nav-items">Video ...</li>
                                <li class="body-nav-items">Broadcast ...</li>
                            </ul>
                        </div>
                    </div>

                    <div class="section-new">
                        <div class="section-new-header">
                            <h4 class="col-sec">Events ...</h4>
                        </div>
                        <div class="section-new-body">
                            <ul class="body-nav">
                                <li class="body-nav-items">Event1 ...</li>
                                <li class="body-nav-items">Event2 ...</li>
                                <li class="body-nav-items">Event3 ...</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>  
        @include('layouts.defaultfooter') 
   
             
            @else
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

                        <div id="section-1">
                            <div class="container-fluid container-comp">
                                <a href = "#container-2"><i class="fa fa-chevron-down bounce" onclick="scrollWin()"></i></a>
                            
                                <div class="container-1-section-1">
                                    <h2 class="welcome">EverGalax helps you reach your dreams by connecting you to the World</h2>
                                    <img src="{{ asset('images/world-map-2.png') }}" class="welcome-img">
                                </div>

                        

                                <div class="container-2-section-1">
                                    <div class="login-section-1">

                                        <form class="fp-login" action="{{ route('login') }}" method="post">
                                            @csrf
                                            <ul id="fp-loginBox">

                                                <li class="fp-listLogin">
                                                    <input type="email" name="email" placeholder="Email Id or Username" class="login-attmp" id="email" required style="margin-top: 15px;">
                                                </li>

                                                <li class="fp-listLogin">
                                                    <input type="password" name="password" placeholder="Password" class="login-attmp" id="pass" required>
                                                </li>
                                                <input type="hidden" name="_token" value="{{ Session::token() }}" >
                                                
                                                <div id="new-member">
                                                    <div class="forgot-pswd-part">
                                                        <a href=" href="{{ route('password.request') }}" style="font-size: 14px; font-weight: bold; color: #27291C;">{{ __('Forgot Your Password?') }}</a>
                                                    </div>    
                                                    <div class="remem-pswd">
                                                        <label style="font-size: 15px; font-weight: bold; color: #27291C;">
                                                            <input type="checkbox" name="remember" style="height: 13px;" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>

                                                <li class="fp-listLogin">
                                                    <input type="submit" value="Login" class="btn login-attmp" id="login-btn">
                                                </li>  
                                            </ul>
                                        </form>
                                    </div>  

                                    <div class="signup-section-1">
                                        <form class="fp-login" action="{{ route('register') }}">
                                            <div id="login-body-header">
                                                <p class="reg-para">New Here? SignUp Its Free</p><hr>
                                            </div>

                                            <ul id="fp-RegBox">
                                                <li class="fp-listLogin">
                                                    <div class="col-lg-15">
                                                        <input type="text" name="firstname" placeholder="Enter First Name*" class="login-attmp form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" id="firstname" required>

                                                        @if ($errors->has('firstname'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('firstname') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </li>

                                                 

                                                <li class="fp-listLogin">
                                                    <div class="col-lg-15">
                                                        <input type="text" name="lastname" placeholder="Enter Last Name*" class="login-attmp form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" id="lastname" required>

                                                        @if ($errors->has('lastname'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('lastname') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </li>

                                                <li class="fp-listLogin">
                                                    <div class="col-lg-15">
                                                        <input type="email" name="email" placeholder="Enter Email*" class="login-attmp form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" required>

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </li>

                                                <li class="fp-listLogin">
                                                    <div class="col-lg-15">
                                                        <input type="password" name="password" placeholder="Enter Password*" class="login-attmp form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </li>

                                                <li class="fp-listLogin">
                                                    <div class="col-lg-15">
                                                        <input type="password" name="confirmpassword" placeholder="Confirm Password*" class="login-attmp form-control{{ $errors->has('confirmpassword') ? ' is-invalid' : '' }}" id="confirmpassword" required>

                                                        @if ($errors->has('confirmpassword'))
                                                            <span class="invalid-feedback">
                                                                <strong>{{ $errors->first('confirmpassword') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </li>

                                                <li class="fp-listLogin">
                                                    <div class="col-lg-15">
                                                        <input type="radio" name="gender" value="male" id="gender" style="vertical-align: middle" required>
                                                        <label class="control-label{{ $errors->has('gender') ? ' error-field-radio' : '' }}">Male</label>
                                            
                                                        <input type="radio" name="gender" value="female" id="gender" style="vertical-align: middle" required>
                                                        <label class="control-label{{ $errors->has('gender') ? ' error-field-radio' : '' }}">Female</label>
                                            
                                                        <input type="radio" name="gender" value="other" id="gender" style="vertical-align: middle" required>
                                                        <label class="control-label{{ $errors->has('gender') ? ' error-field-radio' : '' }}">Other</label>
                                                    </div>
                                                </li>

                                                <li class="fp-listLogin">
                                                        <p class="tnc">Clicking Signup, you agree to our <a href="#" id="atnc">terms</a> & <a href="#" id="atnc">conditions</a>.</p>
                                                </li>

                                                <li class="fp-listLogin">
                                                    <div class="col-lg-15">
                                                        <button type="submit" class="btn login-attmp" id="signup-btn">
                                                            {{ __('Sign Up') }}
                                                        </button>
                                                    </div>
                                                </li>

                                            </ul>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section 2-->

                    <!--
                        <div id="footer">
                            <ul id="footer-section">
                                <li>Help</li>
                                <li>Blog</li>
                                <li>Status</li>
                                <li>Jobs</li>
                                <li>Terms</li>
                                <li>Privacy</li>
                                <li>Cookies</li>
                                <li>Ads Info</li>
                                <li>Brand</li>
                                <li>Apps</li>
                                <li>Advertise</li>
                                <li>Businesses</li>
                                <li>Media</li>
                                <li>Developers</li>
                                <li>Directory</li>
                                <li><i class="fa fa-copyright"></i> 2016 EverGalax</li>
                            </ul>
                        </div>

                </div>

    <!--<script src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
            $('#login').click(function()
            {
                $.ajax({
                    type: "POST",
                    url: "api/auth",
                    processData: "false",
                    ContentType: "application/json",
                    data: '{ "username": "'+ $("#username").val() +'", "password": "'+ $("#password").val() +'" }',

                    success: function(r){
                        setTimeout(function() {
                        $('[data-bs-hover-animate]').removeClass('animated ' + $('[data-bs-hover-animate]').attr('data-bs-hover-animate'));
                        }, 2000)
                        $('[data-bs-hover-animate]').addClass('animated ' + $('[data-bs-hover-animate]').attr('data-bs-hover-animate'))
                        console.log(r)
                    },

                });
            });

            
        </script>-->
                @include('layouts.defaultfooter')        
            @endauth
        @endif
    </body>
</html>
