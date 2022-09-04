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
$cstation = $_POST['cstation'];
$dstation = $_POST['dstation'];
$ddate = $_POST['ddate'];
$rdate = $_POST['rdate'];
$adt = $_POST['adt'];
$cht = $_POST['cht'];
$set = $_POST['set'];
$class = $_POST['classes'];
$oneorround = true;
$travellers = (int)$adt + (int)$cht + (int)$set;

if (isset($_POST['srone'])){
    $_SESSION['way'] = "one";
    $sele = "select * from trains where seatsnum > '$travellers' and start = '$cstation' and distination = '$dstation' and departdate = '$ddate'";
    header("location:../selecttrain.php?sql=" .$sele ."&class=" .$class ."&adualt=" .$adt ."&child=" .$cht ."&sen=" .$set);
    $_SESSION['cst'] = $cstation;
    $_SESSION['dst'] = $dstation;
    $_SESSION['dd'] = $ddate;
    $_SESSION['rd'] = " ";
    $_SESSION['cls'] = $class;
    $_SESSION['trv'] = $travellers;
}elseif (isset($_POST['srround'])){
    $_SESSION['way'] = "round";
    $sele = "select * from trains where seatsnum > '$travellers' and start = '$cstation' and distination = '$dstation' and departdate = '$ddate' and returndate = '$rdate'";
    header("location:../selecttrain.php?sql=" .$sele ."&class=" .$class ."&adualt=" .$adt ."&child=" .$cht ."&sen=" .$set);
    $_SESSION['cst'] = $cstation;
    $_SESSION['dst'] = $dstation;
    $_SESSION['dd'] = $ddate;
    $_SESSION['rd'] = $rdate;
    $_SESSION['cls'] = $class;
    $_SESSION['trv'] = $travellers;
    
}
?>