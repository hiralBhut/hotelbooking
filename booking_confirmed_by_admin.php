<?php
include("connection.php");
$booking_id = $_POST["bookingId"];
$confirm = $_POST["confirmation"];
$email =$_POST["email"];
$hotelname = $_POST["hotelname"];

if(strcmp($confirm, "confirm") == 0){
	$sql = "UPDATE booking_confirmation SET status='confimred' WHERE booking_id='$booking_id'";
	$result = mysqli_query($link, $sql);
	if(!$result){
	    echo "Error while confirming the booking";
	    exit;
	} else {
		
		$message ="Your booking is confirmed:\n\n";
		$message .= "your request for hotel =" . $hotelname . " booking has been accepted";
        if(mail($email, 'confirm your registration', $message, 'From:'.'hiral20@icloud.com' )){
	       echo "<div class='alert alert-success text-center'>" . "mail has been sent for confirmation of" . $hotelname . " to " . $email . "</div>";
        }
	}
} else if(strcmp($confirm, "refuse") == 0){
	$sql = "UPDATE booking_confirmation SET status='cancel' WHERE booking_id='$booking_id'";
	$result = mysqli_query($link, $sql);
	if(!$result){
	    echo "Error while canceling the booking";
	    exit;
	} else {
		echo "success";
	}
}

?>