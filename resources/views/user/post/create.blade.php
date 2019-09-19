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

                <!-- /.content-header -->
               <section class="content">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-8 float-left">
                           <form role="form" action = "{{route('post.store')}}" method="post" enctype="multipart/form-data">
                           @csrf
                           <div class="card card-outline card-info">
                              
                              <div class="card-header">
                                 <div class="form-group">
                                    <label for="title" name="title">Post Title</label>
                                    <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }} form-control-lg col-md-11" type="text" placeholder="Write Title" id="title" name="title" id="title">
                                    @if ($errors->has('title'))
                                       <span class="invalid-feedback">
                                          <strong>{{ $errors->first('title') }}</strong>
                                       </span>
                                    @endif
                                 </div>

                                 <div class="form-group">
                                    <label for="subtitle">Post Sub Title</label>
                                    <input type="text" class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }} col-md-11" id="subtitle" name="subtitle" placeholder="Sub Title">
                                     @if ($errors->has('subtitle'))
                                       <span class="invalid-feedback">
                                          <strong>{{ $errors->first('subtitle') }}</strong>
                                       </span>
                                    @endif
                                 </div>

                                 <div class="form-group">
                                    <label for="slug">Post Slug</label>
                                    <input type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }} col-md-11" id="slug" name="slug" placeholder="Slug">
                                    @if ($errors->has('slug'))
                                       <span class="invalid-feedback">
                                          <strong>{{ $errors->first('slug') }}</strong>
                                       </span>
                                    @endif
                                 </div>
                                 <!-- tools box -->

                                 <div class="card-tools">
                                    <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                 </div>
                              </div>

                              <!-- /.card-header -->
                              <div class="card-body pad">
                                 <div class="mb-3">
                                    <textarea class="textarea form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" placeholder="Write A Post Here" name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor" ></textarea>

                                    @if ($errors->has('body'))
                                       <span class="invalid-feedback">
                                          <strong>{{ $errors->first('body') }}</strong>
                                       </span>
                                    @endif
                                 </div>  
                              </div>
                           </div>
                        </div>

                           <div class="float-right col-md-4">
                              <div class="col-md-12 float-right">
                                 <div class="card card-outline card-info">
                                    <div class="card-header">    
                                       <div class="form-group">
                                          <label for="image" name="image" class="form-control">Upload Image</label>
                                          <input type="file" name="image" id="image" class="">
                                          
                                          
                                       
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-md-12 float-right">
                                 <div class="card card-outline card-info">
                                    <div class="card-header">    
                                       <div class="form-group">
                                          <label for="title">
                                             <input type="checkbox" name="status" value="1"> Publish
                                          </label> 
                                       </div>

                                       <div class="col-md-11">                        
                                          <div class="form-group"> 
                                             <label>Select Tags</label>
                                             <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select Tag" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                                                @foreach ($tags as $tag)
                                                   <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>

                                       <div class="col-md-11">
                                          <div class="form-group">
                                             <label>Select Category</label>
                                             <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select Tag" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                                                @foreach ($categories as $category)
                                                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                             </select>
                                          </div>
                                       </div>

                                       <div class="box-footer">
                                          <input type="submit" class="btn btn-primary">
                                          <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </section>  
            </div>
        </div>  
        @include('layouts.defaultfooter') 
   
            
    </body>
</html>
