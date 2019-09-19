@include('user.blog.layouts.blogdefaultheader')

<title>EverGalax</title>
        
        
    </head>

    <body>

        <div id="super_container">
            <header class="head_bg">

                <!-- Header Content -->
                <div class="header_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="logo_container">
                                        <a href="url{{'/'}}">
                                            <img src="{{ URL::asset('images/Logo Name.png') }}" width="200px" height="33px" alt="EverGalax" id="eg-logo" style="position: fixed;">
                                        </a>
                                    </div>
                                    <nav class="main_nav_contaner ml-auto">
                                        <ul class="main_nav">
                                            <li class="active"><a href="#">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="courses.html">Courses</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="#">Page</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                                        <!-- Hamburger -->

                                        <div class="hamburger menu_mm">
                                            <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                        </div>
                                    </nav>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header Search Panel -->
                <div class="header_search_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                    <form action="#" class="header_search_form">
                                        <input type="search" class="search_input" placeholder="Search" required="required">
                                        <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>

                <!-- Menu -->

                <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
                    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
                    <div class="search">
                        <form action="#" class="header_search_form menu_mm">
                            <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                                <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                    <nav class="menu_nav">
                        <ul class="menu_mm">
                            <li class="menu_mm"><a href="index.html">Home</a></li>
                            <li class="menu_mm"><a href="#">About</a></li>
                            <li class="menu_mm"><a href="#">Courses</a></li>
                            <li class="menu_mm"><a href="#">Blog</a></li>
                            <li class="menu_mm"><a href="#">Page</a></li>
                            <li class="menu_mm"><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div id="home" class="hero-area">
                <div class="home_slider_container">
                    <!-- Backgound Image -->
                    <div class="bg-image bg-parallax overlay" style="background-image:url(http://localhost:81/EverGalax/public/images/background7.jpg)"></div>
                    <!-- /Backgound Image -->

                    <div class="home-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col text_bg_text">
                                    <h1 class="white_text_heading">Read And Share Content Of Your Own</h1>
                                    <p class="lead white_text_para">Share Your Beautiful Thoughts And Knowledge.</p>
                                    <a class="main-button icon-button" href="#">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="posts">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title_container text-center">
                                <h2 class="section_title">Latest posts</h2>
                                <div class="section_subtitle"><p>Here are Just Posted Content By Our User</p></div>
                            </div>
                        </div>
                    </div>

                    <div class="row posts_row">
                        <div class="col-lg-7 posts_col">
                            
                            @foreach($latestposts as $post)
                            <!-- posts posts Large -->
                            <div class="posts_post_large_container">
                                <div class="posts_post_large">
                                    <div class="posts_post_image">
                                        <img src="{{ url(Storage::disk('local')->url($post->image)) }}" alt="">
                                    </div>
                                    <div class="posts_post_large_title"><a href="{{ route('post',$post->slug) }}">{{ $post->title }}</a></div>
                                    <div class="posts_post_meta">
                                        <ul>
                                            <li><a href="#">admin</a></li>
                                            <li><a href="#">{{ $post->created_at->diffForHumans()}}</a></li>
                                        </ul>
                                    </div>
                                    <div class="posts_post_text">
                                        <p>{{ substr(strip_tags($post->body), 0, 150) }}{{ strlen(strip_tags($post->body)) > 150 ? '...' : "" }}</p>
                                    </div>
                                    <div class="posts_post_link"><a href="blog_single.html">read more</a></div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-lg-5 posts_col">
                            <div class="posts_post_small">

                                @foreach($skipPost as $posts)
                                <!-- posts postss Small -->
                                <div class="posts_post_small">
                                    <div class="posts_post_small_title">
                                        <div class="posts_small_image col-lg-3">
                                            <img src="{{ url(Storage::disk('local')->url($posts->image)) }}" alt="" width="75" height=65">
                                        </div>
                                        <div class="posts_small_link col-lg-9">
                                            <a href="blog_single.html">{{ $posts->title }}</a>
                                        </div>
                                    </div>
                                    <div class="posts_post_meta">
                                        <ul>
                                            <li><a href="#">admin</a></li>
                                            <li><a href="#">{{ $posts->created_at->diffForHumans()}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="posts">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title_container text-center">
                                <h2 class="section_title">All posts</h2>
                                <div class="section_subtitle"><p>Get Every Published Post by our user and community</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="row posts_row">
                        <div class="col">
                            <div class="blog_post_container">

                                @foreach($allPosts as $posts)
                                <!-- Blog Post -->
                                <div class="blog_post trans_200">
                                    <div class="blog_post_image">
                                        <img src="{{ url(Storage::disk('local')->url($posts->image)) }}" alt="" width="100%" height="240px">
                                    </div>
                                    <div class="blog_post_body">
                                        <div class="blog_post_title"><a href="{{ route('post',$posts->slug) }}">{{ $posts->title }}</a></div>
                                        <div class="blog_post_meta">
                                            <ul>
                                                <li><a href="#">admin</a></li>
                                                <li><a href="#">{{ $posts->created_at->diffForHumans()}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="blog_post_text">
                                            <p>{{ substr(strip_tags($posts->body), 0, 150) }}{{ strlen(strip_tags($posts->body)) > 150 ? '...' : "" }}</p>
                                        </div>
                                    </div>
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
           
            <!-- Footer -->

            <footer class="footer">
                <div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
                <div class="container">
                    <div class="row footer_row">
                        <div class="col">
                            <div class="footer_content">
                                <div class="row">

                                    <div class="col-lg-3 footer_col">
                            
                                        <!-- Footer About -->
                                        <div class="footer_section footer_about">
                                            <div class="footer_logo_container">
                                                <a href="#">
                                                    <div class="footer_logo_texwt">
                                                        <img src="{{ URL::asset('images/Logo Name.png') }}" width="200px" height="33px" alt="EverGalax" id="eg-logo">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="footer_about_text">
                                                <p>Be Who You Want To Be</p>
                                            </div>
                                            <div class="footer_social">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>


                                    <div class="col-lg-3 footer_col">
                            
                                        <!-- Footer links -->
                                        <div class="footer_section footer_links">
                                            <div class="footer_title">Categories</div>
                                            <div class="footer_links_container">
                                                <ul>
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="about.html">About</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="#">Features</a></li>
                                                    <li><a href="courses.html">Courses</a></li>
                                                    <li><a href="#">Events</a></li>
                                                    <li><a href="#">Gallery</a></li>
                                                    <li><a href="#">FAQs</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row copyright_row">
                        <div class="col">
                            <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                                <div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script><i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.evergalax.com" target="_blank">EverGlax</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                                <div class="ml-lg-auto cr_links">
                                    <ul class="cr_list">
                                        <li><a href="#">Copyright notification</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
@include('user.blog.layouts.blogdefaultfooter')