<?php
session_start();
$tickid = $_GET['tickid'];
$traiid = $_GET['trid'];
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
      <a href="index.php" class="active">IRAQRAIL</a>
      <a href="booking.php">Book Ticket</a>
      <a href="#contact">Contact Us</a>
      <a href="#contact">About</a>
      <a href="account.php" style="float:right; border-left:1px solid white;">My Account</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <!--Navbar End-->
    <!--Select train Section start-->
    <div class="checkout-form">
          <?php  echo'<form method="post" action="backend/ticandpay.php?tid='.$tickid .'&trid=' .$traiid .'">'?>  
                <h3>Payment</h3>
                <label>Accepted Cards</label><br>
                <p><i class="fa fa-cc-visa" style="color: blue;"></i> <i class="fa fa-cc-mastercard" style="color:orange;"></i></p>
                <label>Name on Card</label><br>
                <input type="text" placeholder="Name" name="cname" required><br>
                <label>Card Number</label><br>
                <input type="text" placeholder="Number on card" name="cnumb" required><br>
                <label>Exp Month</label><br>
                <input type="text" placeholder="EX:Februry" required><br>
                <label>Exp Year</label><br>
                <input type="text" placeholder="EX:2022" required><br>
                <label>CVV</label><br>
                <input type="text" placeholder="CVV Code" name="cvv" required><br>
                <input type="submit"  value="Pay">
          </form>
          <div class="cart">
            <h3>Prcie</h3>
            <hr>
            <p>Total <span class="Cartprice" style="color:black"><b><?php session_start(); echo $_SESSION['price']; ?>$</b></span></p>
          </div>
      </div>
    <!--Select train Section end-->

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