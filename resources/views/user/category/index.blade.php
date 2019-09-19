@include('user.blog.layouts.blogdefaultheader')

<title>EverGalax - Blog</title>
        
        
    </head>

    <body>

        <div id="super_container">
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
                                <a href="" class="fa-head-fcolor">Welcome </a>
                            </li>
                        </ul>
                    </div>
                </div>

               
                <!--breadcrum -->
                <div class="home">
                    <div class="breadcrumbs_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="breadcrumbs">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>                
            </div>
            
            <div class="blog">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="blog_post_container">

                                <!-- Blog Post -->
                                @foreach($categories as $category)
                                    
                                    <div class="blog_post trans_200">
                                        <a href="{{ route('category',$category->slug) }}">
                                            <div class="blog_post_image"><img src="{{ url(Storage::disk('local')->url($post->image)) }}" alt="" width="100%" height="200px"></div>
                                            <div class="blog_post_body">
                                                <div class="blog_post_title">{{ $category->name }}</div>
                                                <div class="blog_post_meta">
                                                    <ul>
                                                        <li><p>{{ substr(strip_tags($category->description), 0, 150) }}{{ strlen(strip_tags($category->description)) > 150 ? '...' : "" }}</p></li>
                                                    </ul>
                                                </div>
                                                <div class="blog_post_text">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                @endforeach

                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <div class="load_more trans_200"><a href="#">load more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>


