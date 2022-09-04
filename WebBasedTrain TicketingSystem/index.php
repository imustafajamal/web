<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRAQ Railway</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/44b84d61df.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Navbar Start-->
    <div class="topnav" id="myTopnav">
      <a href="#home" class="active">IRAQRAIL</a>
      <a href="booking.php">Book Ticket</a>
      <a href="contactus.php">Contact Us</a>
      <a href="aboutus.php">About</a>
      <?php
      session_start();
        if ($_SESSION['loggedin'] != null){
            echo '<a href="account.php" style="float:right; border-left:1px solid white;">My Account</a>';
        }else{
            echo '<a href="signin.php" style="float:right; border-left:1px solid white;">Log in</a>';
        }
      ?>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <!--Navbar End-->
    <!--Main Section start-->
    <div class="main">
        <div class="content">
            <h1>IraqRail</h1>
            <h5>Fast Way To Get Your Train Ticket Online</h5>
            <a href="booking.php">BOOK NOW!</a>
        </div>
    </div>
    <!--Main Section end-->

    <!--Services Section start-->
    <div class="services">
        <h1>Our Services</h1>
        <div class="serv">
            <i class="fa fa-train" aria-hidden="true"></i>
            <h4>Fast Online Ticket Booking</h4>
            <p>Our Website offer fast way<br>Ticket Booking Online<br>without need go to Train Station.</p>
        </div>
        <div class="serv">
            <i class="fa fa-ticket"></i>
            <h4>Two Way Ticket Booking</h4>
            <p>We offer to passnger to book<br>there ticket for one way<br>or two way.</p>
        </div>
        <div class="serv">
            <i class="material-icons">airline_seat_recline_extra</i>
            <h4>VIP Seats</h4>
            <p>There's 3 classes for seats <br> in train Class A and <br> Class B , C.</p>
        </div>
        <div class="serv" style="margin-right:10px;">
            <i class="material-icons">support_agent</i>
            <h4>24/7 Support</h4>
            <p>Our Support Agents Available <br> for 24 Hours and <br> for 7 days.</p>
        </div>
    </div>
    <!--Services Section end-->
    <!--Routs Section start-->
     <div class="main-routs">
        <h1>Our Routes Examples</h1>
        <div class="routs">
            <div class="slide">
                <img src="imgs/baghdad.jpg">
                <h3>From Baghdad</h3>
            </div>
            <div class="slide">
                <img src="imgs/najaf.jpg">
                <h3>To Najaf</h3>
            </div>
            <div class="slide">
                <img src="imgs/basra.jpg">
                <h3>To Basra</h3>
            </div>
            <div class="slide">
                <img src="imgs/erbil.jpg">
                <h3>To Erbil</h3>
            </div>
            <div class="slide">
                <img src="imgs/dhok.jpg">
                <h3>To Dhouk</h3>
            </div>
            <div class="slide">
                <h5>And All Other Iraq States</h5>
            </div>
        </div>
        
    </div>
    <!--Routs Section end-->
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
<script type="text/javascript" src="slick/slick.min.js"></script>
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