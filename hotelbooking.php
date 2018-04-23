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
<section id="hotel-info">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="title">Today's best Deal for Hotel booking</h2>
        <p class="title">Book today.. hurry up..</p>
      </div>
      <div class="col-md-12">
        <?php
           include("connection.php");          

        ?>

          
       

          <?php
          $sql = "SELECT * FROM hotel";
          if($result = mysqli_query($link, $sql)){
            
            if( mysqli_num_rows($result) > 0){
              echo "<form id='hotel_book' method='post'>";
              echo "<input type='hidden' id='user_email' name='user_email' value='" . $_GET['user_email'] . "' />";
              echo "<input type='hidden' id='selectedHotel' name='selectedHotel' value='' />";
              echo "<table id='hotels'>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Book</th>
              </tr>";
              while($row = 
                mysqli_fetch_array($result, MYSQLI_ASSOC)){

                echo "<tr>";
                echo"<td>".$row["id"]."</td>";
                echo"<td><img src='images/". $row["images"]."'></td>";

                echo"<td>".$row["name"]."</td>";
                echo"<td>" . $row["description"] . "</td>";
                echo"<td><input type='submit' value='book' class='btn btn-primary' onclick='getBookingInformation(" . $row["id"] . ")'></td>";
                echo "</tr>";
              }
              echo "</table>";
              echo"</form>";
              // close the result set
              mysqli_free_result($result);

            } else{
              echo "<p>mysql returns empty result set</p>";
            }
          }else{
            echo "<p>Unable to execute query : $sql. " . mysqli_error($link) ."</p>";
          }
          ?>
          
        
      </div>
    </div>
  </div>
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
    <script type="text/javascript" src="js/booking_confirmation.js"></script>
  </body>
</html>