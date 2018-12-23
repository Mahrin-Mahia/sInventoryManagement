<?php
		session_start();
    require_once 'config/db.php';
		$email = $_SESSION['email'];
    $name=$_GET['name'];
    $amount=$_GET['amount'];
    $price=$_GET['price'];
    $totalprice=$_GET['totalprice'];
     $sql_query =mysqli_query($conn,"DELETE FROM cart where com_name='$name' and user_email='$email' and amount='$amount' and price='$price' and total_price='$totalprice'");
     echo "<script>alert('Your item $name($amount kg) has been removed from cart')</script>";
     	echo '<script type="text/javascript">';
     echo"window.location.href = 'cartshow.php'";
     echo"</script>";

    // echo "$name <br> $amount <br> $price <br> $totalprice";
