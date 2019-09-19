 @include('layouts.defaultheader')

		<title>{{ Auth::user()->getFirstnameOrUsername() }}'s Profile</title>
		
	</head>
	<body>
		<div id="containers">
			
			<!-- header -->
			<div class="header">
                <div class="header-container clearfix wrapper"> 
                    <a class="navbar-brands" href="{{ url('/') }}">
                        <img src="{{ asset('images/EverGalax Logo.png') }}" width="38px" height="38px" alt="EverGalax" id="eg-logo" style="position: fixed;">
                    </a>

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
                                        <form>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                        <a href="{{ route('logout') }}">
                                            <li>Logout</li>
                                        </a>
                                        </form>
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


            <!-- Body -->
            <div id="body-start">
				<div class="body-container-prof clearfix wrapper">

					<!--Section 1 -->
					<div id="section-1-prof">
						<div class="section-new-prof">
							<div class="section-new-body-prof">
								<div class="prof-section">
									<div class="profile-image">
										<a href="#">
											<img src="{{ asset('images/EverGalax Logo.png') }}" class="profile-pic" height="185px" width="170px" alt="" style="border-radius: 2px; border-color: #ddd"><br>
											<a href="">Change Profile Picture</a>
										</a>
									</div><br>

									<ul class="profile-detail">


										<li class="profile-detail-nav">

										</li>

										<li class="profile-detail-name">
											<h2 style="margin-bottom: -15px; font-size: 23px;"></h2>
											<p>About Me</p>
										</li>

										<li class="profile-detail-nav">
											<i class="fa fa-briefcase"></i>
											<p id="detail-ans">Works at?</p>
										</li>

										<li class="profile-detail-nav">
											<i class="fa fa-graduation-cap" style="margin-left: 0px;"></i>
											<p id="detail-ans">Wants to be?</p>
										</li>

										<li class="profile-detail-nav">
											<i class="fa fa-map-marker" style="font-size: 19px; padding-left: 3px;"></i>
											<p id="detail-ans">Location</p>
										</li>
									</ul>
								</div>
							</div>

							<div class="column-left-section">
								<div class="user-interest">
									<div class="h-acquire">
										<i class="fa fa-heart"></i>
										<a href="#" style="padding-left: 5px;"># 's Interest</a>
									</div>
									<div class="interest-mediabox">
									</div>
								</div>
							</div>

							<div class="column-left-section">
								<div class="user-interest">
									<div class="h-acquire">
										<i class="fa fa-heart"></i>
										<a href="#" style="padding-left: 5px;"># 's Interest</a>
									</div>
									<div class="interest-mediabox">
									</div>
								</div>
									

								<div class="user-video">
									<div class="h-acquire">
										<i class="fa fa-play"></i>
										<a href="#" style="padding-left: 5px;"># 's Video</a>
									</div>
									<div class="video-mediabox"></div>
								</div>

								<div class="user-photo">
									<div class="h-acquire">
										<i class="fa fa-camera-retro"></i>
										<a href="#" style="padding-left: 5px;"># 's Photo</a>
									</div>
									<div class="photo-mediabox"></div>
								</div>

								<div class="user-friend-list">
									<div class="h-acquire">
										<i class="fa fa-handshake-o" aria-hidden="true"></i>
										<a href="" style="padding-left: 5px;"># 's Friends</a>
									</div>
									<div class="photo-mediabox">
										<p>, has no Friends.</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Section 2 -->
					<div id="section-2-prof">
						<div class="section-new-prof">
							<div class="section-new-body-prof">
								<div class="profile-cover">
									<a href="#" class="link-cover-pic">
										<img src="{{ asset('images/EverGalax Logo.png') }}" alt="" class="cover-pic-size">
										<a href="#" class="cover-pic-bottm">
											<span class="edit-prof-text">Edit Profile Cover</span>
										</a>	
									</a>
								</div>
							</div>

							<div class="new-post">
								<form method="Post" action="" class="status_form">
									<textarea rows="3" placeholder="Share anything about you.." class="status-control {{ $errors->has('email') ? ' error-field' : '' }}"></textarea>
									<ul class="status-pills">
										<li class="fa fa-camera-retro"></li>
										<li class="fa fa-video-camera"></li>
										<li class="fa fa-map-marker"></li>
										<li class="fa fa-cog"></li>
										<li class="fa fa-angle-double-down"></li>
										<li class="status-post"><button type="submit" class="sub_status">Post</button></li>
									</ul>
									<input type="hidden" name="_token" value="{{ Session::token() }}">
								</form>
							</div>

							<div id="section-new-post">
								<div class="tab-container">
									<ul class="tabs">
										<li class="current"><a href="#tabs-1">Social Feed</a></li>
										<li class="current-1"><a href="#tabs-2">Learning Feed</a></li>
										<li class="current-2"><a href="#tabs-3">Live Feed</a></li>
										<li class="current-3"><a href="#tabs-4">University Feed</a></li>
									</ul>

									<div id="tabs-1" class="tab-content">
										<div class="section-new-prof">
											<div class="timeline">
												<div class="section-new-body">
													<ul class="body-nav-feeds">
														<li class="body-nav-items">
															
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div id="tabs-2" class="tab-content" style="display: none;">
										<div class="section-new-post">
											<div class="section-new-feed">
												<ul class="body-nav">
													<li class="body-nav-items">Learning Feed 1 ...</li>
													<li class="body-nav-items">Learning Feed 2 ...</li>
													<li class="body-nav-items">Learning Feed 3 ...</li>
												</ul>
											</div>
										</div>
									</div>

									<div id="tabs-3" class="tab-content" style="display: none;">
										<div class="section-new-post">
											<div class="section-new-feed">
												<ul class="body-nav">
													<li class="body-nav-items">Live Feed 1 ...</li>
													<li class="body-nav-items">Live Feed 2 ...</li>
													<li class="body-nav-items">Live Feed 3 ...</li>
												</ul>
											</div>
										</div>
									</div>

									<div id="tabs-4" class="tab-content" style="display: none;">
										<div class="section-new-post">
											<div class="section-new-feed">
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
					</div>
				</div>
			</div>	
		</div>		
						
						
							
								

							
					

		

 @include('layouts.defaultfooter')

