<?php

//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
//Decode the string
$unencodedData=base64_decode($filteredData);
 
//Save the image
file_put_contents('../ticketimgs/'.$_GET['tid'] .'.png', $unencodedData);
$ticid=$_GET['tid'];
$trnid=$_GET['trainid'];
$tickpri =$_GET['tprice'];

echo $ticid;
echo '<br>';
echo $trnid;
echo '<br>';
echo $tickpri;
header('location:../payment.php?trid=' .$trnid .'&tickid=' .$ticid .'&tpri=' .$tickpri )

?>