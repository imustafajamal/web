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

$name = $_POST['fname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$repass = $_POST['cpassword'];
$birthdate = $_POST['birthday'];
$address = $_POST['address'] ."/" .$_POST['address'];
$phone = $_POST['phone'];
$error_message = "";
$success_message = "";

//Get Age from birthdate
$birth = new DateTime($birthdate);
$today   = new DateTime('today');
$age = $birth->diff($today)->y;

$s = "select * from passengers where email = '$email'";
$result = mysqli_query($con ,$s);
$num = mysqli_num_rows($result);

if (isset($_POST['reg'])) {
    if ($name == "") {
        $error_message = "Name Should not be Empty";
    } else if ($email == "") {
        $error_message = "Email Should not be Empty";
    } else if ($pass == "") {
        $error_message = "Password Should not be Empty";
    }else if (strlen($pass) < 8) {
        $error_message = "Password Should be at least 8 charchters";
    } else if ($pass != $repass) {
        $error_message = "Password not Match";
    } else if ($num != 0) {
        $error_message = "Email Allready Registered";
    } else {
        $reg = "insert into passengers (name , email , password , age , phone , address) values ('$name' , '$email' , '$pass' , '$age' ,'$phone' , '$address')";
        mysqli_query($con, $reg);
        $success_message = "Regestired! Go To Log in Page";
    }
}
?>