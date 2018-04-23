<?php
//start session 
session_start();
include("connection.php");

//<!--ceheck user input-->
//	<!--Define error message-->
$missingUsername = '<p><strong>Please Enter a Username!</strong></p>';
$missingemail = '<p><strong>Please Enter your email address!</strong></p>';
$invalidemail = '<p><strong>Please Enter a valid email address!</strong></p>';
$missingpassword = '<p><strong>Please Enter a password!</strong></p>';
$invalidpassword = '<p><strong>your password must be 6 character long and one capital letter, and one number!</strong></p>';
$differentpassword = '<p><strong>passsword dont match!</strong></p>';
$missingpassword2 = '<p><strong>Please confirm your password!</strong></p>';

//<!--get username,email, password,password2-->
//get username
if(empty($_POST["username"])){
	$errors .= $missingUsername;
}else{
	$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
}
//get email
if(empty($_POST["email"])){
	$errors .= $missingemail;
}else{
	$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors .= $invalidemail;
	}
}
//get password
if(empty($_POST["pwd"])){
	$errors .= $missingpassword;
}elseif(!(strlen($_POST["pwd"]) > 6 
	and preg_match('/[A-Z]/', $_POST["pwd"])
	and preg_match('/[0-9]/', $_POST["pwd"])
	)
){
  $errors .= $invalidpassword;
 }else{
 	$password = filter_var($_POST["pwd"], FILTER_SANITIZE_STRING);
 	if(empty($_POST["pwd2"])){
 		$errors .= $missingpassword2;

 	}else{
 		$password2 = filter_var($_POST["pwd2"], FILTER_SANITIZE_STRING);
 		if($password !== $password2){
 			$errors .= $differentpassword;

 		}

 	}
 }

 //Get user type (admin or user)

 if(!empty($_POST["user_type"])){
 	$user_type = $_POST["user_type"];
 }

//<!--if error print error-->

if($errors){
		$resultmessage = '<div class="alert alert-danger">' . $errors . ' </div>';
		echo $resultmessage;
}
else{

//<!--no error-->
//<!--prepare variable for query-->
$username = mysqli_real_escape_string($link, $username);
$email = mysqli_real_escape_string($link, $email);
$password = mysqli_real_escape_string($link, $password);
$password = hash('sha256', $password);
$user_type = mysqli_real_escape_string($link, $user_type);

//<!--if username exists in table print error-->
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($link, $sql);
if(!$result){
	echo '<div class="alert alert-danger">Error running the query!</div>';
	echo '<div class="alert alert-danger">'. mysqli_error($link) . '</div>';
	
	exit;
}
$results = mysqli_num_rows($result);
if($results){
	echo '<div class="alert alert-danger">username is already registered!</div>';
	exit;
}

//<!--if email exists in table print error-->
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($link, $sql);
if(!$result){
	echo '<div class="alert alert-danger">Error running the query!</div>';
	exit;
}
$results = mysqli_num_rows($result);
if($results){
	echo '<div class="alert alert-danger">email is already registered!</div>';
	exit;
}
//<!--else -->
//<!--create unique activation code-->

$activationkey = bin2hex(openssl_random_pseudo_bytes(16));
//<!--insert user details and activatio codei in usertable-->
$sql= "INSERT INTO users (username,email,password,activation,user_type) VALUES ('$username','$email','$password','$activationkey','$user_type')";
$result = mysqli_query($link, $sql);
if(!$result){
    echo "<div class='alert alert-danger'>" . "Error inserting userdeatils in database! " . mysqli_error($link) ."	</div>'";
	
	
	exit;	
}
//<!--send user an emailwith link to activate.php with their email and activation code-->
$message ="Please Click on this link to activate your account:\n\n";
$message .= "http://hiralbhut.thecompletewebhosting.com/hotelbooking/activate.php?email=" . urlencode($email) . "&key=$activationkey";
if(mail($email, 'confirm your registration', $message, 'From:'.'hiral20@icloud.com' )){
	echo "<div class='alert alert-success'>Thank you for regestering A confirmation email has been sent to $email. Please click on activation link to activate your account!</div>";
}
}

?>




	
	



