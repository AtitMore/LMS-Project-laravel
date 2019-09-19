<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>fname lname</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/profile.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="nav navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-pencil-square-o"></i></a>
          <a class="navbar-brand" href="./profile.php">fname lname</a> 
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-left" role="search" action="" target="">
            <div class="input-group input-group-sm">
              <input type="search-form" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default" data-target=".search-form">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-user-plus badge"> <span>4</span></i></a></li>
            <li><a href="#"><i class="fa fa-comments-o badge"> <span>4</span></i></a></li>
            <li><a href="#"><i class="fa fa-globe badge"> <span>4</span></i></a></li>
            <li><a href="#"><i class="fa fa-leanpub badge"> <span>4</span></i></a></li>
            <li class="visible-xs"><a href="./index.php"><i class="fa fa-power-off"></i> Log Out</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-th"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><i class="fa fa-cogs"></i> Account Settings</a></li>
                <li><a href="#"><i class="fa fa-sliders"></i> Manage</a></li>
                <li><a href="./index.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                <li class="divider"></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Report a problem</a></li>
              </ul> 
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-8">
        <div class="panel panel-default hidden-xs">
          <div class="panel-body panel-border">
            <img src="./img/quote-facebook-cover-photo.jpg" height="315" width="888" class="cover-photo">
            <a href="#"><button class="btn btn-default btn-sm" id="cover-btn"><i class="fa fa-folder-open"></i> Change cover</button></a>
          </div>
        </div>
        <div class="panel panel-default profile-xs">
          <div class="panel-body panel-profile">
            <div class="col-md-3">
              <a href="#" id="profile-pic">
                <img src="./img/user-male.png" class="media-object" height="161" width="161">
              </a>
              <a href="#"><button class="btn btn-default btn-sm" id="profile-btn"><i class="fa fa-pencil"></i></button></a>
            </div>
            <div class="col-md-9">
              <h2 class="profile-des" id="profile-name">fname lname</h2>
              <p class="profile-des" id="about-user">This is not just an online learning network - This is a social learning media which redefine the education system, now connect to the world with power of your choice.</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <ul class="nav nav-pills pull-left">
              <li>
                <a href="#">
                  <button type="button" class="btn btn-default btn-circle"><i class="fa fa-info-circle fa-lg"></i> About</button>
                </a>
              </li>
              <li>
                <a href="#">
                  <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-users fa-lg"></i> Friends</button>
                </a>
              </li>
              <li>
                <a href="#">
                  <button type="button" class="btn btn-success btn-circle"><i class="fa fa-camera-retro fa-lg"></i> Pictures</button>
                </a>
              </li>
              <li>
                <a href="#">
                  <button type="button" class="btn btn-info btn-circle"><i class="fa fa-video-camera fa-lg"></i> Videos</button>
                </a>
              </li>
              <li>
                <a href="#">
                  <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-leanpub fa-lg"></i> Learning</button>
                </a>
              </li>
              <li>
                <a href="#">
                  <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-map-marker fa-lg"></i> Location</button>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Status</h4>
          </div>
          <div class="panel-body">
            <textarea class="form-control" rows="3" placeholder="What's on your mind?"></textarea>
          </div>
          <div class="panel-footer">
            <ul class="nav nav-pills pull-left panel-status foot-status">
              <li><a href="#"><i class="fa fa-camera fa-lg fa-pills"></i></a></li>
              <li><a href="#"><i class="fa fa-tag fa-lg fa-pills"></i></a></li>
              <li><a href="#"><i class="fa fa-thumb-tack fa-lg fa-pills"></i></a></li>
              <li><a href="#"><i class="fa fa-clock-o fa-lg fa-pills"></i></a></li>  
            </ul>
            <ul class="nav nav-pills panel-status">  
              <li class="pull-right post-status-xs"><a href="#"><button type="submit" class="btn btn-primary btn-sm">Post</button></a></li>
              <li class="pull-right setn-status-xs">
                <a href="#">
                  <button type="edit" class="btn btn-default btn-sm hidden-xs"><i class="fa fa-sliders"></i> Settings</button>
                  <i class="fa fa-sliders fa-lg visible-xs"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>