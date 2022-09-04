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
      <a href="" class="active">Control Panal</a>
      <a href="trains.php">Trains</a>
      <a href="passengers.php">Passengers</a>
      <a href="tickets.php">Tickets</a>
      <a href="account.php" style="float:right; border-left:1px solid white;">My Account</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <!--Navbar End-->
    <!--control panal Section start-->
    <div class="cntrl">
        <div class="liner">
            <a href="trains.php">
                <div class="onel">
                        <img src="imgs/trains.jpg">
                        <h1>Trains</h1>
                </div>
            </a>    
            <a href="passengers.php">
                <div class="onel">
                        <img src="imgs/passn.jpg">
                        <h1>Passengers</h1>
                </div>
            </a>  
        </div>
        <div class="liner">
            <a href="tickets.php">
                <div class="onel">
                        <img src="imgs/tickets.jpg">
                        <h1>Tickets</h1>
                </div>
            </a>      
        </div>

    </div>
    <!--control panal Section end-->

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