<?php
include ('PHPMailer/src/PHPMailer.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
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
$tic = (int)$_GET['tid'];
$trn = (int)$_GET['trid'];
$pnr = (int)$_SESSION['pnr'];
$trv = $_SESSION['trv'];
$start = $_SESSION['cst'];
$dist = $_SESSION['dst'];
$depart = $_SESSION['dd'];
$pname = $_SESSION['name'];
if ($_SESSION['rd'] == " "){
    $return = "No return date";
}else{
    $return = $_SESSION['rd'];
}
if ($_SESSION['cls'] == "classa"){
    $class = "A";
}elseif($_SESSION['cls'] == "classb"){
    $class = "B";
}else{
    $class = "Normal";
}

$price = (int)$_SESSION['price'];
$currentdate = (string)date("Y/m/d");
$insertticket = "insert into tickets (tid , pnr , tnum , travelersnum , start , distination , departdate , returndate , class , price) values ('$tic' , '$pnr' , '$trn' , '$trv' , '$start' , '$dist', '$depart' , '$return' ,'$class' , '$price')";
$inserinvoice = "insert into invoice (pnr , tid , amount , date) values ('$pnr' , '$tic' , '$price' , '$currentdate')";
mysqli_query($con , $insertticket);
mysqli_query($con , $inserinvoice);
header('location:../purchesed.php?tickid=' .$tic);

?>