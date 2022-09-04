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
$srpass = $_POST['srchpr'];
$sp = mysqli_query($con,"select * from passengers");
if (isset($_POST['srp'])){
    if ($srpass!= ""){
        $sp = mysqli_query($con, "select * from passengers where pnr = '$srpass'");
    }else{
        $sp = mysqli_query($con,"select * from passengers");
    }

}

?>