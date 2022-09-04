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
      <?php 
      session_start();
      if ($_SESSION['loggedin'] == "user"){
        echo '<a href="index.php" class="active">IRAQRAIL</a>
        <a href="booking.php">Book Ticket</a>
        <a href="contactus.php">Contact Us</a>
        <a href="aboutus.php">About Us</a>';
      }
      else{
        echo '<a href="" class="active">Control Panal</a>
        <a href="trains.php">Trains</a>
        <a href="passengers.php">Passengers</a>
        <a href="tickets.php">Tickets</a>';
      }
      ?>
      <a href="backend/logout.php" style="float:right; border-left:1px solid white;">Log out</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <!--Navbar End-->
    <!--account Section start-->
    <div class="account-cont">
        <?php
            session_start();
            $host = "localhost"; /* Host name */
            $user = "mustafaj"; /* User */
            $password = "18921892"; /* Password */
            $dbname = "iraqrailway"; /* Database name */

            $con = mysqli_connect($host, $user, $password,$dbname);
            // Check connection
            if (!$con) {
               die("Connection failed: " . mysqli_connect_error());
            }
            $pnr = $_SESSION['pnr'];
            $seletic = mysqli_query($con , "select * from tickets where pnr = '$pnr'");
            if ($_SESSION['loggedin'] == "user") {
              echo '<h1>Welcome <span>' .$_SESSION['name'].'</span></h1>';
              echo '<p>Email address :'  .$_SESSION['email'].'</p>';
              echo '<h3>Your Bocked Tickets</h3>';
              echo '<hr>';
              echo '<table>
                  <tr>
                  <th>Ticket Number</th>
                  <th>Start</th>
                  <th>Distination</th>
                  <th>Depart</th>
                  <th>Return</th>
                  <th>Travellers NO</th>
                  <th>Preview</th>
                  <th>Cancelation</th>
                  </tr>';
                  while ($rows = mysqli_fetch_array($seletic)){
                    echo'<tr><td>' .$rows['tid'] .'</td><td>' .$rows['start'].'</td><td>'
                    .$rows['distination'].'</td><td>'.$rows['departdate'].'</td><td>'
                    .$rows['returndate'].'</td><td>'.$rows['travelersnum'].'</td><td><a href="ticketprivew.php?ticid='.$rows['tid'].'">Show Ticket</a></td><td><a id="cancle" href="backend/cancleticket.php?tickid='.$rows['tid'].'">Cancle Ticket</a></td></tr>';
                  }
                  echo '</table>';
            }else{
              echo '<h1>Welcome Admin <span>' .$_SESSION['name'].'</span></h1>';
              echo '<p>Email address :'  .$_SESSION['email'].'</p>';
            }
        ?>
    </div>
    <!--account Section end-->

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