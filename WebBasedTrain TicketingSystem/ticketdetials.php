<?php

use function PHPSTORM_META\type;

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
$st = mysqli_query($con ,"select * from tickets");
$tid =(rand(10,100000));
$trainid = $_GET['trid'];
$tpr = $_GET['price'];

while ($rowtwo = mysqli_fetch_array($st)){
    if($rowtwo['tid'] != $tid){
        $tid = $tid;
        $_SESSION['tickid'] = $tid;
    }
    else{
        $tid =(rand(10,100000));
    }

}
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
    <!--Ticket Details Section start-->
    <div class="ticket-cont">
        <h1>Ticket Preview</h1>
        <div class="ticket-info" id="pticket">
            <i class="fas fa-subway" id="back"> IRAQRAIL</i>
            <div class="tick-head">
                <h6><i class="fas fa-subway"></i> IRAQRAIL Train Ticket</h6>
                <h6 style="float: right;">Ticket No.:<?php echo $tid; ?></h6>
            </div>
            <div class="tick-head">
                <div class="blk">
                    <h8>Passengers Name:</h8>
                    <p><?php session_start(); echo $_SESSION['name']?></p>
                </div>
                <div class="blk">
                    <h8>Price:</h8>
                    <p><?php echo $_GET['price']?> $</p>
                </div>
                <div class="blk" style="margin-right: 10px;">
                    <h8>Train:</h8>
                    <p><?php echo $_GET['tname'] ?></p>
                </div>
            </div>
            <div class="tick-head">
                <div class="blk">
                    <h8>From:</h8>
                    <p><?php session_start(); echo $_SESSION['cst']?></p>
                </div>
                <div class="blk" >
                    <h8>Class:</h8>
                    <p>
                        <?php session_start();
                         if ($_SESSION['cls'] == "classa"){
                             echo "A";
                         }elseif($_SESSION['cls'] == "classb"){
                            echo "B";
                         }else{
                            echo "Normal";
                         }
                        ?>
                    </p>
                </div>
                <div class="blk" style="margin-right: 10px;">
                    <h8>Depart:</h8>
                    <p><?php session_start(); echo $_SESSION['dd']?></?></p>
                </div>
            </div>
            <div class="tick-head">
                <div class="blk">
                    <h8>to:</h8>
                    <p><?php session_start(); echo $_SESSION['dst']?></p>
                </div>
                <div class="blk">
                    <h8>Travellers No:</h8>
                    <p><?php session_start(); echo $_SESSION['trv']?></p>
                </div>
                <div class="blk" style="margin-right: 10px;">
                    <h8>Return:</h8>
                    <p>
                        <?php 
                        session_start();
                        if ($_SESSION['rd'] == " "){
                            echo "No return date";
                        }else{
                            echo $_SESSION['rd'];
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <input type="submit" value="Confirm Ticket" onclick="capture();" />
        <?php echo '<form method="POST" enctype="multipart/form-data" action="backend/save.php?tid='.$tid .'&trainid=' .$trainid .'&tprice=' .$tpr .'"id="myForm">'?>
            <input type="hidden" name="img_val" id="img_val" value="" />
        </form>
    </div>

    <!--Ticket details Section end-->

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
<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
function capture() {
    $('#pticket').html2canvas({
        onrendered: function (canvas) {
            //Set hidden field's value to image data (base-64 string)
            $('#img_val').val(canvas.toDataURL("image/png"));
            //Submit the form manually
            document.getElementById("myForm").submit();
        }
    });
}
</script>

</html>