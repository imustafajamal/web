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
$srtk = (int)$_POST['srchtk'];
$st = mysqli_query($con,"select * from tickets");
if (isset($_POST['srtk'])){
    if ($_POST['srchtk'] != ""){
        $st = mysqli_query($con, "select * from tickets where tid = '$srtk'");
    }else{
        $st = mysqli_query($con, "select * from tickets");
    }

}

?>