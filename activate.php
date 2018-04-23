<?php
//<!-- user is redirected to file after clicking deactivation link-->
// <!--signup link contains two Get parameter email and activation key-->

session_start();
include('connection.php');

i
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/mystyle.css" rel="stylesheet">

    <title>Account activation</title>
    <?php
    if(!isset($_GET['email']) || !isset($_GET['key'])){
	echo '<div class="alert alert-danger">There was an error.Please click on activation link you recieved by email!</div>';
	exit;
}
else{
	$email = $_GET['email'];
	$key = $_GET['key'];

	$email = mysqli_real_escape_string($link ,$email);
	$key = mysqli_real_escape_string($link ,$key);
	$sql = "UPDATE users SET activation='activated' WHERE (email='$email' AND activation='$key') LIMIT 1";
	$result = mysqli_query($link, $sql);

	if(mysqli_affected_rows($link) == 1){
           //successs message
			echo '<div class="alert alert-success">your account has activated!</div>';
			echo '<a href="index.php" type="button" class="btn-lg btn-success">Log in</a>';

	}else{
		//error message
			echo '<div class="alert alert-danger">Your account could not be activated > please try again later!</div>';

	}
}
    ?>
  </head>
  <body>
    
<h1>Account activation:</h1>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
  </body>
</html>




