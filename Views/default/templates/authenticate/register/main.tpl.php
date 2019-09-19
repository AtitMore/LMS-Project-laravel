<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to EverGalax - Log in or Sign up</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  </head>

  <body>
    <div class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.php">EverGalax</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="./register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
            <li><a href="#contact" data-toggle="modal"><i class="fa fa-phone fa-lg"></i> Contact Us</a></li>
            <li class="visible-xs"><a href="#"><i class="fa fa-info-circle"></i> About Us</a></li>
          </ul>
          <div class="navbar-text visible-xs">
            <p>©  2015 EverGalax</p>
          </div>
        </div>
      </div>
    </div>

    <div class="navbar navbar-inverse navbar-fixed-bottom hidden-xs" role="navigation">
      <div class="container">
          <div class="navbar-text pull-left">
            <p>©  2015 EverGalax</p>
          </div>
          <div class="navbar-collapse collapse">  
            <ul class="nav navbar-nav pull-right">
              <li><a href="#"><i class="fa fa-info-circle"></i> About Us</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Jobs</a></li>    
              <li><a href="#">Support</a></li>
            </ul>
          </div>
      </div>
    </div>

    <div class="row row-body">
      <div class="container-fluid">
        <div class="col-sm-1 nopadding"></div>
        <div class="col-sm-6 nopadding">
          <div class="panel panel-default panel-nav">
            <div class="panel-heading">
              <h4 align="center">Welcome to EverGalax.</h4>
            </div>
            <div class="panel-body panel-pad">
              <div id="indexCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#indexCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#indexCarousel" data-slide-to="1"></li>
                  <li data-target="#indexCarousel" data-slide-to="2"></li>
                  <li data-target="#indexCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner">
                  <div class="item active">
                    <img src="./img/1.png" alt="EverGalax - connecting world.">
                    <div class="carousel-caption">
                      <h3 class="head-carousel">We help you connect your World.</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/2.png" alt="EverGalax - helping.">
                    <div class="carousel-caption">
                      <h3 class="head-carousel">We help you attain over your limits</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/3.png" alt="EverGalax - sharing.">
                    <div class="carousel-caption">
                      <h3 class="head-carousel">Get the best of you.</h3>
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/4.png" alt="EverGalax - passion.">
                    <div class="carousel-caption">
                      <h3 class="head-carousel">Follow your passion!</h3>
                    </div>
                  </div>
                </div>
                <a href="#indexCarousel" class="left carousel-control" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria=-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a href="#indexCarousel" class="right carousel-control" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria=-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="row-sm-4">
            <div class="panel panel-default panel-nav">
              <div class="panel-heading"><a href="./login.php" style="color: white;">EverGalax - Login</a></div>
              <div class="panel-body">
                <form class="form-horizontal" role="form" method="post">
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="email" name="email" placeholder="Email Id (someone@example.com)" required autofocus>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                      <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                      <button class="btn btn-success sub-width" type="submit"> Login</button>
                    </div>
                    <div class="col-sm-5">
                      <label id="remember_p" class="control-label"><a href="./forget_password.php"><small>Forgot password?</small></a></label>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row-sm-6">
            <div class="panel panel-default row-pad">
              <div class="panel-heading"><a href="./register.php" style="color: white;">EverGalax - Register</div></a>
              <div class="panel-body">
                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                      <input class="form-control fname" type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                      <input class="form-control lname" type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" id="email" name="email" placeholder="Email Id (someone@example.com)" required>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                      <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                      <input class="form-control" type="password" name="rpassword" id="password" placeholder="Re-enter Password" required>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                      <div class="radio" id="pad-up">
                        <label><input type="radio" name="sex" value="male" name="m">Male</label>
                        <label><input type="radio" name="sex" value="female" name="f">Female</label>
                    </div>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                      <p id="pad-up"><small>By clicking Sign Up, you agree to our <a href"#">Terms</a> and that you have read our <a href"#">Data Policy</a>, including our <a href"#">Cookie Use</a>.</small></p>
                      <button type="submit" name="submit" class="btn btn-warning" id="btn-submit">Sign Up</button>
                    </div>
                    <div class="col-sm-1"></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="row-sm-2"></div>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>

    <div class="modal fade" id="contact" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="form-horizontal" role="form">
            <div class="modal-header">
              <h4 align="left">Contact</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="contact-name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="contact-name" placeholder="First & Last Name" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <label for="contact-email" class="col-sm-2 control-label">Email Id</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="contact-email" placeholder="someone@example.com" required>
                </div>
              </div>
              <div class="form-group">
                <label for="contact-message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="contact-message" rows="4" required></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Send</button>
                <a class="btn btn-default" data-dismiss="modal">Close</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>    