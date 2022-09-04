<?php
include "backend/newtrain.php"
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRAQ Railway</title>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script src="https://kit.fontawesome.com/44b84d61df.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.css" >
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel="stylesheet" href="css/main.css">
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
    <div class="trains">
        <div class="line">
            <form method="POST">
                <input type="text" placeholder="Enter Train Number..." name="search">
                <input type="submit" name="sr" value="Search">
            </form>
            <a href="#" id="newtrain">Add Train</a>   
        </div>
        <div class="train-cont">
            <table>
                <tr>
                    <th>Train No</th>
                    <th>Train Name</th>
                    <th>Start</th>
                    <th>Distination</th>
                    <th>Dapart</th>
                    <th>Return</th>
                    <th>Seats N0</th>
                    <th>Delete</th>
                </tr>
                <?php
                    while ($rowtwo = mysqli_fetch_array($s)) {
                        echo '<tr>
                        <td>' .$rowtwo['tnum'].'</td>
                        <td>' .$rowtwo['tname'].'</td>
                        <td>' .$rowtwo['start'].'</td>
                        <td>' .$rowtwo['distination'].'</td>
                        <td>' .$rowtwo['departdate'].'</td>
                        <td>' .$rowtwo['returndate'].'</td>
                        <td>' .$rowtwo['seatsnum'].'</td>
                        <td><a href="backend/deletetrain.php?tnum='.$rowtwo['tnum'].'">Delete</a></td>
                        </tr>';
                    }
                ?>
            </table>
        </div>

    </div>
    <!--trains Section end-->
    <!--new train form-->
    <div class="popup">
        <div class="nt-cont">
            <h1>Add New Train<a href="#" id="close1">x</a></h1>
            <form method="post">
                <input type="text" placeholder="Train Name" name="tname" required><br>
                <input type="text" placeholder="Start" class="basicAutoComplete" autocomplete="off" name="tstart" required><br>
                <input type="text" placeholder="Distination" class="basicAutoComplete" autocomplete="off" name="tdist" required><br>
                <input type="text" id="datetime4" placeholder="Depart" name="tdepart" required><br>
                <input type="text" id="datetime5" placeholder="Return" name="treturn" required><br>
                <input type="text" placeholder="Sets Number" name="tseats" required><br><br>
                <input type="submit" name="tsave" value="Save Train">
            </form>
        </div>
    </div>
    <!--new train end-->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.3.2/dist/latest/bootstrap-autocomplete.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
$("#datetime4").datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    autoclose: true
});
$("#datetime5").datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    autoclose: true
});
</script>
<script type="text/javascript">
  $("#newtrain").click(function(){
     $(".popup").css('display', 'block');
  });
  $("#close1").click(function(){
     $(".popup").css('display', 'none');
  });
</script>	
<script>
  $('.basicAutoComplete').autoComplete({
    resolverSettings: {
        url: 'js/json/cities.json'
    }
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