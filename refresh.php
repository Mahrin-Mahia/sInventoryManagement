<?php
session_start();
require_once 'config/db.php';
$email = $_SESSION['email'];
$quantity=$_GET['quantity'];
$comid=$_GET['com_id'];
$cabinetid=$_GET['cabinet_id'];
//echo "$email <br> $quantity <br> $comid <br> $cabinetid";
mysqli_query($conn,"UPDATE data SET com_id='$comid'
WHERE id='1'");
mysqli_query($conn,"UPDATE data SET cabinet_id='$cabinetid'
WHERE id='1'");

mysqli_query($conn,"UPDATE data SET get_data='1'
WHERE id='1'");
mysqli_query($conn,"UPDATE data SET value='$quantity'
WHERE id='1'");
echo '<script type="text/javascript">';


echo"window.location.href = 'profile.php'";
echo"</script>";

 ?>
