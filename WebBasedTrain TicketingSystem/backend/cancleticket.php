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
$tid = $_GET['tickid'];

$dt = "delete from tickets where tid = '$tid'";
$di = "delete from invoice where tid = '$tid'";
mysqli_query($con , $dt);
mysqli_query($con , $di);
header("location:../account.php");
?>