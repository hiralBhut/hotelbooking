<?php
//connect to db
$link = mysqli_connect("hiralbhut.thecompletewebhosting.com", "hiralbhu_saur", "saur0112@", "hiralbhu_hotelbookingsystem");
if(mysqli_connect_error()){
	die("ERROR: Unable to connect:" . mysqli_connect_error());
}

?>