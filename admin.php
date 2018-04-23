<!doctype html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/mystyle.css" rel="stylesheet">

    <title>Admin Page</title>
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
      
      <a href="logout.php" class="btn btn-primary pull-right" style="margin-top:20px;"> log out</a>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
<div id="message_confirm"></div>
<section id="admin_report">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title_adm">Welcome Admin !</h1>

<?php

//connect to db
include("connection.php");

$sql = "SELECT * FROM booking_confirmation WHERE status='pending'";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) != 0) {
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       
        echo "<input type='text' id='booking_id' name='booking_id' value='" . $row["booking_id"] . "'/><br />";
        echo "<label id='Hid'>hotel id:: " . $row['hotel_id'] . "</label><br />";
        echo "<label id='Hname'>hotel name:: " . $row['hotel_name'] . "</label><br />";
        echo "<label id='email'>user email:: " . $row['username'] . "</label><br />";
        echo "<input type='button' class='btn btn-success' id='confirm' name='confirm' value='confirm' onclick='confirm(" . $row['booking_id'] . ")'/>";
        echo "<input type='button' class='btn btn-danger' id='refuse' name='refuse' value='refuse' onclick='refuse(" . $row['booking_id'] . ")'/><br /><br />";
        
    }
}
else{
    echo '<div class="alert alert-success text-center">There is no pending request!</div>';

    
} 


?>

            </div>
        </div>
    </div>
</section>
<footer id="footer">
    <p>Copyrights&copy 2018.ALL Right Reserved.</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
</body>
</html>