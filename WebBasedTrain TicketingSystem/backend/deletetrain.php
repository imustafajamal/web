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
$tn = $_GET['tnum'];

$d = "delete from trains where tnum = '$tn'";
mysqli_query($con , $d);
header("location:../trains.php");
?>