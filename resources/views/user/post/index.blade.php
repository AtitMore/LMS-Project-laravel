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
                <!-- /.card-header -->
                <div class="post_sec-indx" style="width: 75%; float: left">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Post Title</th>
                                    <th>Post Slug</th>
                                    <th>Author</th>
                                    <th>Categories</th>
                                    <th>Created At</th>
                                </tr>
                           </thead>

                            <tbody>
                              @foreach($posts as $post)
                              <tr>
                                 <td>{{ $loop->index + 1}}</td>
                                 <td>
                                    <div class="col-sm">
                                       {{ str_limit($post->title, 50) }}
                                    </div>


                                    
                                    <div class="d-inline-block col-sm">
                                       <div class="col-sm-6 float-left">
                                          <a href="{{ route('post.edit', $post->id) }}">
                                             <p><i class="fa fa-pencil-square">
                                             edit</p></i>
                                          </a>
                                       </div>
                                       

                                       
                                       <div class="col-sm-6 float-left">
                                          <form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy', $post->id) }}" style="display: none;" method="post">
                                             @csrf
                                             @method('DELETE')
                                          </form>
                                          <a href="{{ route('post.index') }}" onclick="
                                          if(confirm('Are You Sure, You Want To Delete This?')){
                                             event.preventDefault();
                                             document.getElementById('delete-form-{{ $post->id }}').submit();
                                          }
                                          else{
                                             event.preventDefault();
                                          }">
                                             <p><i class="fa fa-trash-o">Delete</p></i>
                                          </a>
                                       </div>
                                       
                                    </div>   
                                 </td>
                                 
                                 <td>{{ $post->slug }}</td>
                                 <td>{{ str_limit($user->firstname, 50) }} {{ str_limit($user->lastname, 50) }}</td>
                                 <td>
                                    @foreach ($post->categories as $category)
                                       {{ $category->name }}
                                    @endforeach
                                 </td>
                                 <td>{{ $post->created_at->format('jS F Y h:i:s A') }}</td>
                              </tr>
                              @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>Sr. No</th>
                                    <th>Post Title</th>
                                    <th>Post Slug</th>
                                    <th>Author</th>
                                    <th>Categories</th>
                                    <th>Created At</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>  
        </div>
    </div>  
        
   
             
            
    </body>
</html>
