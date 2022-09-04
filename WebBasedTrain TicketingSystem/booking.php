<?php
include "backend/availtrains.php";
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
<body style="background-image: url('imgs/back2.jpg'); background-size: cover; background-color: rgba(17, 17, 17, 0.488); background-blend-mode: multiply;">
    <!--Navbar Start-->
    <div class="topnav" id="myTopnav">
      <a href="index.php" class="active">IRAQRAIL</a>
      <a href="booking.php">Book Ticket</a>
      <a href="contactus.php">Contact Us</a>
      <a href="aboutus.php">About</a>
      <a href="account.php" style="float:right; border-left:1px solid white;">My Account</a>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
    <!--Navbar End-->
    <!--Tabs Buutons Start-->
    <div class="tabs">
        <button  onclick="openCity('London')">One-way</button>
        <button  onclick="openCity('Paris')">Round-trip</button>
    </div>
    <!--Tabs Buutons End-->
    <!--First Tab Start-->
    <div id="London" class="booking-cont-one city">
        <h1>One way Ticket Booking</h1>
        <form method="POST">
            <div class="line">
                <div class="oneline">
                    <label><i class="fas fa-map-marker-alt"> </i> from:</label><br>
                    <input type="text" name="cstation" id="cstation" autocomplete="off" class="basicAutoComplete" placeholder="Current Station" required>
                </div>
                <div class="oneline">
                    <label><i class="fas fa-map-marker-alt"></i> to:</label><br>
                    <input type="text" name="dstation" id="cstation" autocomplete="off" class="basicAutoComplete" placeholder="Required Station"  required>
                </div>
                <div class="oneline">
                    <label><i class="fas fa-calendar-alt"> </i> Depart:</label><br>
                    <input  id="datetime" name="ddate" type="text" autocomplete="off" placeholder="Date and Time" required>
                </div>
            </div>
            <h3>Travellers <div class="tip"><div><b>About Passengers Number</b><ul><li>Adulats Passengers price will be default as the system prices.</li><li>there is no fee on ticket price for Children there ages between(1-5 years).</li><li>Ticket price will has fee 5% on default price for seniors because there is extra service for theme.</li></ul></div><i class="fa fa-exclamation-circle" aria-hidden="true"></i></div></h3>
            <div class="line">
                <div class="oneline">
                    <label><i class="fas fa-male"></i> Adualts:</label><br>
                    <div class="selector">
                        <div class="vbutton" id="decrease" onclick="decreaseValue1()" value="Decrease Value">-</div>
                        <input type="number" name="adt" class="select-tr" id="number1" value="0" required/>
                        <div class="vbutton" id="increase" onclick="increaseValue1()" value="Increase Value">+</div>
                    </div>
                </div>
                <div class="oneline">
                    <label><i class="fas fa-child"></i> Children:</label><br>
                    <div class="selector">
                        <div class="vbutton" id="decrease" onclick="decreaseValue2()" value="Decrease Value">-</div>
                        <input type="number" name="cht" class="select-tr" id="number2" value="0" required/>
                        <div class="vbutton" id="increase" onclick="increaseValue2()" value="Increase Value">+</div>
                    </div>

                </div>
                <div class="oneline">
                    <label><i class="fas fa-blind"> </i> Senior:</label><br>
                    <div class="selector">
                        <div class="vbutton" id="decrease" onclick="decreaseValue3()" value="Decrease Value">-</div>
                        <input type="number" name="set" class="select-tr" id="number3" value="0" required/>
                        <div class="vbutton" id="increase" onclick="increaseValue3()" value="Increase Value">+</div>
                    </div>

                </div>
            </div>
            <label><i class="fas fa-ticket-alt"> </i> Ticket Class:</label><br>
            <select name="classes" id="classes"> 
                <option value="classa">Class A</option>
                <option value="classb">Class B</option>
                <option value="normalclass">Normal Class</option>
            </select>
            <br><br>
            <div style="text-align: center;">
                <input type="submit" name="srone" class="search" value="Search For Trains">
            </div>
        </form>
    </div>
    <!--First Tab end-->
    <!--second Tab Start-->
    <div id="Paris" class="booking-cont-round city" style="display:none">
        <h1>Round Trip Ticket Booking</h1>
        <form method="POST">
            <div class="line-round">
                <div class="oneline-round">
                    <label><i class="fas fa-map-marker-alt"> </i> from:</label><br>
                    <input type="text" name="cstation" id="cstation" autocomplete="off" class="basicAutoComplete" placeholder="Current Station" required>
                </div>
                <div class="oneline-round">
                    <label><i class="fas fa-map-marker-alt"></i> to:</label><br>
                    <input type="text" name="dstation" id="cstation" autocomplete="off" class="basicAutoComplete" placeholder="Required Station"  required>
                </div>
            </div>
            <div class="line-round">
                <div class="oneline-round">
                    <label><i class="fas fa-calendar-alt"> </i> Depart:</label><br>
                    <input  id="datetime2" name="ddate" type="text" autocomplete="off" placeholder="Date and Time" required>
                </div>
                <div class="oneline-round">
                    <label><i class="fas fa-calendar-alt"> </i> Return:</label><br>
                    <input  id="datetime3" name="rdate" type="text" autocomplete="off" placeholder="Date and Time" required>
                </div>
            </div>
            <h3>Travellers <div class="tip"><div><b>About Passengers Number</b><ul><li>Adulats Passengers price will be default as the system prices.</li><li>there is no fee on ticket price for Children there ages between(1-5 years).</li><li>Ticket price will has fee 5% on default price for seniors because there is extra service for theme.</li></ul></div><i class="fa fa-exclamation-circle" aria-hidden="true"></i></div></h3>
            <div class="line-round">
                <div class="oneline-round" style="width:250px">
                    <label><i class="fas fa-male"></i> Adualts:</label><br>
                    <div class="selector">
                        <div class="vbutton" id="decrease" onclick="decreaseValue4()" value="Decrease Value">-</div>
                        <input type="number" name="atr" class="select-tr" id="number4" value="0" required/>
                        <div class="vbutton" id="increase" onclick="increaseValue4()" value="Increase Value">+</div>
                    </div>
                </div>
                <div class="oneline-round" style="width:250px">
                    <label><i class="fas fa-child"></i> Children:</label><br>
                    <div class="selector">
                        <div class="vbutton" id="decrease" onclick="decreaseValue5()" value="Decrease Value">-</div>
                        <input type="number" name="cht" class="select-tr" id="number5" value="0" required/>
                        <div class="vbutton" id="increase" onclick="increaseValue5()" value="Increase Value">+</div>
                    </div>

                </div>
                <div class="oneline-round" style="width:250px">
                    <label><i class="fas fa-blind"> </i> Senior:</label><br>
                    <div class="selector">
                        <div class="vbutton" id="decrease" onclick="decreaseValue6()" value="Decrease Value">-</div>
                        <input type="number" name="set" class="select-tr" id="number6" value="0" required/>
                        <div class="vbutton" id="increase" onclick="increaseValue6()" value="Increase Value">+</div>
                    </div>

                </div>
            </div>
            <label><i class="fas fa-ticket-alt"> </i> Ticket Class:</label><br>
            <select name="classes" id="classes">
                <option value="classa">Class A</option>
                <option value="classb">Class B</option>
                <option value="normalclass">Normal Class</option>
            </select>
            <br><br>
            <div style="text-align: center;">
                <input type="submit" name="srround" class="search" value="Search For Trains">
            </div>
        </form>
    </div>
    <!--second Tab end-->

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
<script src="js/nav.js"></script>
<script src="js/tabs.js"></script>
<script src="js/selector.js"></script>
<script src="js/dateandtime.js"></script>
<script>
  $('.basicAutoComplete').autoComplete({
    resolverSettings: {
        url: 'js/json/cities.json'
    }
});
</script>

<script type="text/javascript">
$("#datetime").datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    autoclose: true
});
$("#datetime2").datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    autoclose: true
});
$("#datetime3").datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    autoclose: true
});
</script>
</html>