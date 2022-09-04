<?php
include "backend/registeration.php";
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
      <a href="signin.php" style="float:right; border-left:1px solid white;">Sign in</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <!--Navbar End-->
        <!--Registeration Form Start-->
        <div class="form-cont">
        <h1>Register!</h1>
        <form action="" method="post">
            <?php 
            // Display Error message
            if(!empty($error_message)){
            ?>
            <div class="alert alert-danger">
              <strong>Error!</strong> <?= $error_message ?>
            </div>

            <?php
            }
            ?>
            <?php 
            // Display Success message
            if(!empty($success_message)){
            ?>
            <div class="alert alert-success">
              <strong>Success!</strong> <?= $success_message ?>
            </div>

            <?php
            }
            ?>
            <label for="fname">Full Name:</label><br>
            <input type="text" id="fname" name="fname" placeholder="Enter full name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter email" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Enter password" required><br>
            <label for="cpassword">Re-password:</label><br>
            <input type="password" id="cpassword" name="cpassword" placeholder="re-type password" required><br>
            <label for="cpassword">Birthday:</label><br>
            <input type="date" id="birthday" name="birthday" placeholder="Birthday" required><br>
            <label for="address">Address Line::</label><br>
            <input type="text" id="address" name="address" placeholder="Street" required><br>
            <label for="city">City:</label><br>
            <input type="text" id="city" name="city" placeholder="City" required><br>
            <label for="phone">Phone Number:</label><br>
            <input type="text" id="phobe" name="phone" placeholder="Phone" required><br><br>
            <input type="submit"  name="reg" value="Sign Up">
        </form>
        <p>Allready have an account? <a href="signin.php">Sign in!</a></p>
    </div>
    <!--Registeration Form End-->
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