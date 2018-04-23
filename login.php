<?php
session_start();

//connect to db
include("connection.php");
//check user inputs
	//define error message
$missingemail = '<p>Please enter your email address</p>';
$missingpassword = '<p>please enter a correct password</p>';
//get email
if(empty($_POST["emaillogin"])){
	$errors .= $missingemail;
}else{
	$email = filter_var($_POST["emaillogin"], FILTER_SANITIZE_EMAIL);
	
}
if(empty($_POST["pwdlogin"])){
	$errors .= $missingpassword;
}else{
	$password = filter_var($_POST["pwdlogin"], FILTER_SANITIZE_STRING);
	
}
//if any errors
if($errors){
	$resultmessage = '<div class="alert alert-danger">' . $errors . ' </div>';
	echo $resultmessage;
}
else{


	//no errors
	$email = mysqli_real_escape_string($link, $email);
    $password = mysqli_real_escape_string($link, $password);
    $password = hash('sha256', $password);
    //run query if password and email exists
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND activation='activated'";
    $result = mysqli_query($link, $sql);
    if(!$result){
	echo '<div class="alert alert-danger">Error running the query!</div>';
	echo '<div class="alert alert-danger">'. mysqli_error($link) . '</div>';
	
	exit;
    }
    $count = mysqli_num_rows($result);
    if($count !== 1){
	echo '<div class="alert alert-danger">Wrong username or password!</div>';

    }
    else{
    	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    	$_SESSION['user_id'] = $row['user_id'];
    	$_SESSION['username'] = $row['username'];
    	$_SESSION['email'] = $row['email'];
        $_SESSION['user_type'] = $row['user_type'];
    	if(empty($_POST['rememberme'])){
            if(strcmp($_SESSION['user_type'], "user") == 0){
    		  echo "success_user_" . $_SESSION['email'];
            } else{
                echo "success_admin_" . $_SESSION['email'];
            }
    	}else{

    	}
    }
}

?>

