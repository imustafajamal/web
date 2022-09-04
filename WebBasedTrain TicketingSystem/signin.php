<?php
include "backend/validation.php";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #333;">
    <!--Navbar Start-->
    <div class="topnav" id="myTopnav">
      <a href="#home" class="active">IRAQRAIL</a>
      <a href="#news">Book Ticket</a>
      <a href="#contact">Contact Us</a>
      <a href="#contact">About</a>
      <a href="signup.php" style="float:right; border-left:1px solid white;">Sign up</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <!--Navbar End-->
    <!--log in form start-->
    <div class="form-cont">
        <h1>Sign in!</h1>
        <form action="" method="post">
            <?php 
            // Display Success message
            if(!empty($error_message)){
            ?>
            <div class="alert alert-danger">
              <strong>Error</strong> <?= $error_message ?>
            </div>

            <?php
            }
            ?>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your email" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
            <input type="submit" name="login" value="Log in">
        </form>
        <p>Don't have an account? <a href="signup.php">Register!</a></p>
    </div>

    <!--log in form end-->
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