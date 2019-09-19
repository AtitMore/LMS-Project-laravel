<!-- Blog Sidebar -->
						<div class="col-lg-4">
							<div class="sidebar">

								<!-- Categories -->
								<div class="sidebar_section">
									<div class="sidebar_section_title">Categories</div>
									<div class="sidebar_categories">
										<ul class="categories_list">
											@foreach($category_post as $category_list)
											<li style="list-style-type: none;"><a href="{{ route('category.post',$category_list->slug) }}" class="clearfix">{{ $category_list->name }}<span></span></a></li>
											@endforeach
										</ul>
									</div>
								</div>

								<!--Ads--
								<div class="sidebar_section">
									<div class="sidebar_section_title">Ads</div>
									<div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
										<div class="sidebar_banner_background"></div>

										</div>
									</div>
								</div>-->



								<!-- Latest News --
								<div class="sidebar_section">
									<div class="sidebar_section_title">Latest Courses</div>
									<div class="sidebar_latest">

										<!-- Latest Course --
										<div class="latest d-flex flex-row align-items-start justify-content-start">
											<div class="latest_image"><div><img src="images/latest_1.jpg" alt=""></div></div>
											<div class="latest_content">
												<div class="latest_title"><a href="course.html">How to Design a Logo a Beginners Course</a></div>
												<div class="latest_date">november 11, 2017</div>
											</div>
										</div>

										<!-- Latest Course --
										<div class="latest d-flex flex-row align-items-start justify-content-start">
											<div class="latest_image"><div><img src="images/latest_2.jpg" alt=""></div></div>
											<div class="latest_content">
												<div class="latest_title"><a href="course.html">Photography for Beginners Masterclass</a></div>
												<div class="latest_date">november 11, 2017</div>
											</div>
										</div>

										<!-- Latest Course --
										<div class="latest d-flex flex-row align-items-start justify-content-start">
											<div class="latest_image"><div><img src="images/latest_3.jpg" alt=""></div></div>
											<div class="latest_content">
												<div class="latest_title"><a href="course.html">The Secrets of Body Language</a></div>
												<div class="latest_date">november 11, 2017</div>
											</div>
										</div>

									</div>
								</div>

								<!-- Latest News -->
								<div class="sidebar_section">
									<div class="sidebar_section_title">Latest Post</div>
									<div class="sidebar_latest">

										<!-- Latest Course -->
										@foreach($category_latest_post as $latestPost)
										<div class="latest d-flex flex-row align-items-start justify-content-start">
											<div class="latest_image"><div><img src="{{ url(Storage::disk('local')->url($latestPost->image)) }}" alt="{{ $latestPost->title }}" class="img-fluid" title="{{ $latestPost->title }}"></div></div>
											<div class="latest_content">
												<div class="latest_title"><a href="{{ route('post',$latestPost->slug) }}">{{ $latestPost->title }}</a></div>
												<div class="latest_date">{{ $latestPost->created_at->diffForHumans()}}</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>


								<!-- Banner 
								<div class="sidebar_section">
									<div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
										<div class="sidebar_banner_background" style="background-image:url(images/banner_1.jpg)"></div>
										<div class="sidebar_banner_overlay"></div>
										<div class="sidebar_banner_content">
											<div class="banner_title">Free Book</div>
											<div class="banner_button"><a href="#">download now</a></div>
										</div>
									</div>
								</div>-->
							</div>
						</div>