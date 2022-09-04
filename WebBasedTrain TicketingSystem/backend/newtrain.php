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

$name = $_POST['tname'];
$start = $_POST['tstart'];
$dist = $_POST['tdist'];
$depart = $_POST['tdepart'];
$return = $_POST['treturn'];
$seats = $_POST['tseats'];
$srtrain = $_POST['search'];
$setasnum = (int)$seats;
if (isset($_POST['tsave'])){
    $add = "insert into trains (tname , seatsnum , start , distination , departdate , returndate) values ('$name' , '$setasnum' , '$start' , '$dist' ,'$depart' , '$return')";
    mysqli_query($con, $add);
}
$s = mysqli_query($con,"select * from trains");
if (isset($_POST['sr'])){
    if ($srtrain != ""){
        $s = mysqli_query($con, "select * from trains where tnum = '$srtrain'");
    }else{
        $s = mysqli_query($con,"select * from trains");
    }

}

?>