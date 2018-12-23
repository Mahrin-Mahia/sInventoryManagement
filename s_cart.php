<?php
session_start();
require_once 'config/db.php';
$email = $_SESSION['email'];
$name=$_GET['name'];
$quantity=$_GET['amount'];
$price=$_GET['price'];
$total_price=$quantity*$price;

// echo "$email <br>$name <br>$quantity <br>$price <br>$total_price <br>";

$sql_query00 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
VALUES (NULL, '$email', '$name','$quantity','$price', '$total_price')");
echo "<script>alert('$quantity of $name has been added to your cart')</script>";
echo '<script type="text/javascript">';


echo"window.location.href = 'supershop.php'";
echo"</script>";


 ?>
