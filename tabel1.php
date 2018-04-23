 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/mystyle.css" rel="stylesheet">

    <title>tripfinder</title>
  </head>
  <body>
 <form method="post" id="form1">
     
      
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
                <a class="pull-right" style="cursor:pointer" data-dismiss="modal" data-toggle="modal" data-target="#modal-forgotpass ">Forgot Password?</a>
               </div>
           
           
                <input type="submit" class="btn btn-primary" value="login" name="login">
                <input type="button" class="btn btn-secondary" data-dismiss="modal" value="cancel">
           
        
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/table.js"></script>
  </body>
</html>