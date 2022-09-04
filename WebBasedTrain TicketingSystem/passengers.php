<?php 
include "backend/getpass.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRAQ Railway</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script src="https://kit.fontawesome.com/44b84d61df.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #333;">
    <!--Navbar Start-->
    <div class="topnav" id="myTopnav">
      <a href="controlpanal.php" class="active">Control Panal</a>
      <a href="trains.php">Trains</a>
      <a href="passengers.php">Passengers</a>
      <a href="tickets.php">Tickets</a>
      <a href="account.php" style="float:right; border-left:1px solid white;">My Account</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <!--Navbar End-->
    <!--trains Section start-->
    <div class="passengers">
            <form method="POST">
                <input type="text" name="srchpr" placeholder="Enter PNR...">
                <input type="submit" name="srp" value="Search">
            </form>   
        <div class="pass-cont">
            <table>
                <tr>
                    <th>PNR</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
                <?php
                while($rowthree = mysqli_fetch_array($sp))
                echo '<tr><td>'.$rowthree['pnr'].'</td><td>'.$rowthree['name'].'</td><td>'.$rowthree['email'].'</td><td>'
                .$rowthree['age'] .'</td><td>' .$rowthree['address'].'</td><td>' .$rowthree['phone'].'</td></tr>';
                ?>
            </table>
        </div>

    </div>
    <!--trains Section end-->

     <!--Footer start-->
     <footer>
         <h4>All Copyright Reserved for Iraq Railway 2020</h4>
        <div class="social">
        <h4>Follow us on social media</h4>
        <br>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
     </footer>
    <!--Footer end-->
</body>	
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.routs').slick({
    autoplay: true
  });
});
</script>	
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</html>