<?php
session_start();
include "backend/availtrains.php";
$price = 8;
$seprice =13;
$adualt =(int)$_GET['adualt'];
$child = (int)$_GET['child'];
$sen = (int)$_GET['sen'];
$price = $price * $adualt;
$seprice = $seprice * $sen;
$price = $price + $seprice;
if ($_GET['class'] == "classa"){
    $price +=5;
}elseif($_GET['class'] == "classb"){
    $price +=3;
}
$_SESSION['price'] = $price;
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
    <div class="avail-train">
        <h1>Available Trains</h1>
        <hr>
        <?php
        session_start();
        echo $ddate;
        if ($_SESSION['way'] == "one") {
            $sq = mysqli_query($con ,$_GET['sql']);
            while ($rowtwo = mysqli_fetch_array($sq)) {
                echo '<table>
                <tr>
                <th>Train Name</th>
                <th>From</th>
                <th>To</th>
                <th>Depart</th>
                <th>Price</th>
                <th>Choose</th>
                </tr>
                <td>'.$rowtwo['tname'].'</td><td>'.$rowtwo['start'].'</td><td>'
                .$rowtwo['distination'].'</td><td>'.$rowtwo['departdate'].'</td><td>'.$price.'$</td><td><a href="ticketdetials.php?tname='.$rowtwo['tname'].'&price='.$price .'&trid=' .$rowtwo['tnum'] .'" >Select Trian</a></td></table>';
                

            }
        }else{
            $sq = mysqli_query($con ,$_GET['sql']);
            while ($rowtwo = mysqli_fetch_array($sq)) {
                echo '<table>
                <tr>
                <th>Train Name</th>
                <th>From</th>
                <th>To</th>
                <th>Depart</th>
                <th>Return</th>
                <th>Price</th>
                <th>Choose</th>
                </tr>
                <td>'.$rowtwo['tname'].'</td><td>'.$rowtwo['start'].'</td><td>'.$rowtwo['distination'].'</td><td>'.$rowtwo['departdate'].'</td><td>'.$rowtwo['returndate'].'</td><td>'.$price .'$</td><td><a href="ticketdetials.php?tname='.$rowtwo['tname'].'&price='.$price .'" >Select Trian</a></td>
                </table>';
                
            }
        }
        ?>


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