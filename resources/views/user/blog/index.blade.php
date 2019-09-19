@include('user.blog.layouts.blogdefaultheader')

<title>EverGalax - Blog</title>
        
        
    </head>

    <body>

    	<div id="super_container">
    		<div class="head_bg">
    			<!--
		        <div class="header_top">
		            <div class="header-container clearfix wrapper"> 
		             	<div class="logo-posi">
		                    <a class="navbar-brands" href="{{ url('/') }}">
		                        <img src="{{ asset('images/EverGalax Logo.png') }}" width="40px" height="40px" alt="EverGalax" id="eg-logo">
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
		        </div>-->
	           

	            <!-- Header Content -->
				<div class="header_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo_container">
										<a href="#">
											<div class="logo_text">Ever<span>Galax</span></div>
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

	           
	            <!--breadcrumb -->
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
	        
	        
	        <!--Blog-->
	       	<div class="blog">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="blog_post_container">
								<!-- Blog Post -->
								@foreach($posts as $post)
									
									<div class="blog_post trans_200">
										<a href="{{ route('post',$post->slug) }}">	
											<div class="blog_post_image"><img src="{{ url(Storage::disk('local')->url($post->image)) }}" alt="" width="100%" height="240px"></div>
											<div class="blog_post_body">
												<div class="blog_post_title">{{ $post->title }}</div>
												<div class="blog_post_meta">
													<ul>
														<li><a href="#">admin</a></li>
														<li><a href="#">{{ $post->created_at->diffForHumans() }}</a></li>
													</ul>
												</div>
												<div class="blog_post_text">
													<p>{{ substr(strip_tags($post->body), 0, 150) }}{{ strlen(strip_tags($post->body)) > 150 ? '...' : "" }}</p>
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
	
@include('user.blog.layouts.blogdefaultfooter')



