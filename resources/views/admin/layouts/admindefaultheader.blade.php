<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="{{ URL::asset('/images/EverGalax Logo.png') }}" type="image/x-icon">


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet" type="text/css">
        <!-- Include the plugin's CSS and JS: -->
        <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" type="text/css"/>
        
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        
            <title>Blog - Welcome To EverGalax</title>
        
            <title>EverGalax - Admin</title>
        
    </head>
<!--
    <script>
        // :: 11.0 Preloader active code
    $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });
    </script>
    
    <!-- Preloader Start --
    <div id="preloader">
        <div class="evergalax-load"></div>
    </div> -->

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                    </li>

                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ Route('admin.home')}}" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fa fa-comments-o"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                            </a>
                            <!-- Message Start -->
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                            </a>
                            <!-- Message End -->
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                                <div class="media">
                                    <img src="" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                            </a>
                            <!-- Message End -->
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>

                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fa fa-envelope mr-2"></i> 
                                    4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>

                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fa fa-users mr-2"></i> 
                                    8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>

                            <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="fa fa-file mr-2"></i> 
                                        3 new reports
                                    <span class="float-right text-muted text-sm">2 days</span>
                                </a>

                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                            <i class="fa fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="{{ Route('admin.home')}}" class="brand-link">
                        <img src="{{ asset('images/EverGalax Logo.png') }}" alt="EverGalax Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">EverGalax</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{ asset('images/admin.jpg') }}" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{ ucwords(Auth::user()->getName()) }}</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->


                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-bookmark"></i>
                                    <p>
                                        Post
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
            
                                <ul class="nav nav-treeview">
                                    @can('posts.create', Auth::user())
                                    <li class="nav-item">
                                        <a href="{{Route('post.create')}}" class="nav-link">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>Create New Post</p>
                                        </a>
                                    </li>
                                    @endcan

                                    <li class="nav-item">
                                        <a href="{{route('post.index')}}" class="nav-link">
                                            <i class="fa fa-edit nav-icon"></i>
                                            <p>Post List</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            @can('posts.category', Auth::user())
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-sitemap"></i>
                                    <p>
                                        Category
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>

                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('category.create')}}" class="nav-link">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>Create New Category</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link">
                                            <i class="fa fa-th-list nav-icon"></i>
                                            <p>Category List</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @endcan

                            @can('posts.tag', Auth::user())
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-tag"></i>
                                    <p>Tag
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>

                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('tag.create')}}" class="nav-link">
                                            <i class="fa fa-plus-circle nav-icon"></i>
                                            <p>Create New Tag</p>
                                        </a>
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a href="{{route('tag.index')}}" class="nav-link">
                                            <i class="fa fa-tags"></i>
                                            <p>Tag List</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @endcan

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-user"></i>
                                    <p>
                                        User
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>

                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('user.create') }}" class="nav-link">
                                            <i class="fa fa-user-plus"></i>
                                            <p>Create New User</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}" class="nav-link">
                                            <i class="fa fa-users"></i>
                                            <p>User List</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-id-card"></i>
                                    <p>
                                        Roles
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>

                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('role.create') }}" class="nav-link">
                                            <i class="fa fa-user-plus"></i>
                                            <p>Create New Role</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('role.index') }}" class="nav-link">
                                            <i class="fa fa-th-list"></i>
                                            <p>Role List</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-superpowers"></i>
                                    <p>
                                        Permission
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>

                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('permission.create') }}" class="nav-link">
                                            <i class="fa fa-user-plus"></i>
                                            <p>Create New Permission</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('permission.index') }}" class="nav-link">
                                            <i class="fa fa-th-list"></i>
                                            <p>Permission List</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </aside>

      
  <!-- /.navbar -->
            
    

       