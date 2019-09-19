<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EverGalax - Register</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link type="text/css" href="./css/register.css" rel="stylesheet">
  </head>

  <body class="back-box">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
            <li><a href="#contact" data-toggle="modal"><i class="fa fa-phone fa-lg"></i> Contact Us</a></li>
            <li class="visible-xs"><a href="#"><i class="fa fa-info-circle"></i> About Us</a></li>
          </ul>
          <div class="navbar-text pull-left visible-xs">
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
              <li><a href="#">About Us</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Jobs</a></li>    
              <li><a href="#">Support</a></li>
            </ul>
          </div>
      </div>
    </div>

    <div class="row middle-form">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">EverGalax - Register</div><br>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="post">
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                  <input class="form-control" type="text" name="fname" placeholder="First Name" required autofocus>
                </div>
                <div class="col-sm-3"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                  <input class="form-control" type="text" name="=lname" placeholder="Last Name" required>
                </div>
                <div class="col-sm-3"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                  <input class="form-control" type="text" id="email" name="email" placeholder="Email Id (someone@example.com)" required>
                </div>
                <div class="col-sm-3"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                  <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="col-sm-3"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                  <input class="form-control" type="password" name="rpassword" id="password" placeholder="Re-enter Password" required>
                </div>
                <div class="col-sm-3"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                  <div class="radio">
                    <label><input type="radio" name="sex" value="male" name="m">Male</label>
                    <label><input type="radio" name="sex" value="female" name="f">Female</label>
                  </div>
                </div>
                <div class="col-sm-3"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                  <p class="instruct"><small>By clicking Sign Up, you agree to our <a href"#">Terms</a> and that you have read our <a href"#">Data Policy</a>, including our <a href"#">Cookie Use</a>.</small></p>
                  <button type="submit" name="submit" class="btn btn-warning" id="btn-submit">Sign Up</button>
                </div>
                <div class="col-sm-3"></div>
              </div>
              <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 pull-left">
                    <a href="./login.php"><u>Already a member? Login here.</u></a>
                </div>
                <div class="col-sm-3"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>

    <div id="contact" class="modal fade" role="dialog">
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
                <button type="submit" class="btn btn-danger">Send</button>
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