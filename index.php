<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/mystyle.css" rel="stylesheet">

    <title>tripfinder</title>
  </head>
  <body>
    


<header class="navbar custom-navbar navbar-fixed-top">
<nav class="navbar">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Trip Finder</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li class="btn btn-login" data-toggle="modal" data-target="#exampleModalCenter"><a href="#">Login</a></li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<section id="banner" class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-4">
                <div class="content-banner">
                    <h1>we are here to help you find world's amazing and cheapest Hotel.</h1>
                    <p>Go and Grab a great deal</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-8">
              <div class="content-register">
                
                <form method="post" id="signup-form">
                 <div id="signup-message"></div>
                  <div class="form-group">
                    <label for="username">UserName:</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter email" name="username">
                  </div> 
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                  </div>
                  <div class="form-group">
                    <label for="pwd-c">Confirm Password:</label>
                    <input type="password" class="form-control" id="pwd2" placeholder="reenter password" name="pwd2">
                  </div>
                  <div class="form-group radio-field">
                    <input type="radio"  name="user_type" id="admin" value="admin"> Admin
                    <input type="radio"  name="user_type" id="user" value="user" checked> End User
                  </div>
                  <br/>
                  <input type="submit" class="btn" value="Sign up">
                  <input type="reset" class="btn" value="Cancel">
                </form>
              </div>
            </div>
        </div>
    </div>
</section>
<section id="login">
  <div class="login-page">
    <form method="post" id="form1">
     
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Login:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <div id="login-message"></div>
                <div class="form-group">
                  <label for="emaillogin">Email:</label>
                  <input type="email" class="form-control" id="emaillogin" placeholder="Enter email" name="emaillogin">
                </div>
                <div class="form-group">
                  <label for="pwdlogin">Password:</label>
                  <input type="password" class="form-control" id="pwdlogin" placeholder="Enter password" name="pwdlogin">
                </div>
                <div class="checkbox">
                <label>
                  <input type="checkbox" name="rememberme" id="rememberme">
                  Remeber me
                </label>
               </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="login" name="login">
                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="cancel">
            </div>
          </div>
        </div>
      </div>
    </form>
</diV>




<div class="forgot-passpage">
  <div class="modal fade" id="modal-forgotpass" tabindex="-1" role="dialog" aria-labelledby="forgotpass-title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="forgotpass-title">Forgot your Password? Enter your Email Address:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="forgotpass-message"></div>
      <form action="" id="forgotpass-form">
        
        <div class="form-group">
          <label for="email-login">Email:</label>
          <input type="email" class="form-control" id="email-forgotpass" placeholder="Enter email" name="email-forgotpass">
        </div>
        
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</div><!--forgot pass-->
</section>
<footer id="footer">
    <p>Copyrights&copy 2018.ALL Right Reserved.</p>
</footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/table.js"></script>
  </body>
</html>

