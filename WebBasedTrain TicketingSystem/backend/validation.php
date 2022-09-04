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

$email = $_POST['email'];
$pass = $_POST['password'];
$error_message = "";


$s = "select * from passengers where email = '$email' && password = '$pass'";
$d = "select * from staff where email = '$email' && password ='$pass'";
$result = mysqli_query($con ,$s);
$dresult = mysqli_query($con,$d);
$num = mysqli_num_rows($result);
$num2 = mysqli_num_rows($dresult);

if (isset($_POST['login'])) {
    if ($num != 0) {
        $row=mysqli_fetch_assoc($result);
        $id=$row['pnr'];
        $name=$row['name'];
        $_SESSION['loggedin'] = "user";
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['pnr'] = $id;
        header('location:index.php');
    }else if ($num2 != 0){
        $row2=mysqli_fetch_assoc($dresult);
        $dname=$row2['name'];
        $_SESSION['loggedin'] = "emp";
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $dname;
        header('location:controlpanal.php');
    }else {
        $_SESSION['loggedin'] = null;
        $error_message = "Invalid log in information";
    }
}
?>