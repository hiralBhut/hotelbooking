<?php

//connect to db
include("connection.php");
//check user inputs
$hotelID = $_POST["selectedHotel"];
//$hotelName = $_POST["selectedHotelName"];
$user_email = $_POST["user_email"];

$sql = "SELECT * FROM hotel WHERE id='$hotelID'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo "There is no hotel with this ID";
    exit;
} else {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $hotelName = $row['name'];
}

$sql= "INSERT INTO booking_confirmation (hotel_id,hotel_name,username,status) VALUES ('$hotelID','$hotelName','$user_email','pending')";
$result = mysqli_query($link, $sql);
if(!$result){
    //echo "<div class='alert alert-danger'>" . "Error inserting userdeatils in database! " . mysqli_error($link) ."  </div>'";
    echo mysql_error($link);
    
    exit;   
} else{
    echo "success";
}

?>