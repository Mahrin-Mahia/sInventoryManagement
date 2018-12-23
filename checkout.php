<?php
session_start();
require_once 'config/db.php';
$email = $_SESSION['email'];
// echo "$email";
date_default_timezone_set("Asia/Dhaka");
$date=date('y.m.d');
// echo "$date";
// insert order id
$sql_query =mysqli_query($conn,"INSERT INTO orderid (order_id, order_date, user_email)
VALUES (NULL, '$date', '$email')");




// takes updated order_id from orderid table to insert associate orders to orderhistory


$sql0 = mysqli_query($conn, "SELECT MAX(order_id) as order_id FROM orderid where user_email='$email'");
$pro=mysqli_fetch_assoc($sql0);
  $order_id=$pro['order_id'];
  $sql_querybb =mysqli_query($conn,"INSERT INTO orderstatus (id,order_id, prev_status, cur_status)
  VALUES (NULL,'$order_id', '0', '0')");
  // echo "$order_id";

//query to update user notification
$order_time=date("Y-m-d h:i:s");
$notif_msg="Your Order ".$order_id.", has been taken";
$sql_query2 =mysqli_query($conn,"INSERT INTO shownotif (notif_id, datetime, user_email, notif_msg) VALUES (NULL, '$order_time','$email', '$notif_msg')");

// takes one item at a time and inserts it to orderhistory table

  $sql0 = mysqli_query($conn, "SELECT * FROM cart where user_email='$email'");
  foreach ($sql0 as $key) {
    $name=$key['com_name'];
    $amount=$key['amount'];
    $unitprice=$key['price'];
    $totalprice=$key['total_price'];
    $sql_query =mysqli_query($conn,"INSERT INTO orderhistory (id, order_id, name, quantity, unit_price,total_price)
    VALUES (NULL, '$order_id','$name','$amount','$unitprice','$totalprice')");

// to update supershop inventory
    $sql88 = mysqli_query($conn, "SELECT available_kg FROM groceries where name='$name'");
    $pro=mysqli_fetch_assoc($sql88);
      $g_amount=$pro['available_kg'];
      $new_amount=$g_amount-$amount;
      mysqli_query($conn,"UPDATE groceries SET available_kg='$new_amount'
     WHERE name='$name'");




  }




  // to empty cart
     $sql_query99 =mysqli_query($conn,"DELETE FROM cart where user_email='$email'");

     	echo "<script>alert('Order successful.')</script>";

     echo '<script type="text/javascript">';

// redirect to homepage
 echo"window.location.href = 'profile.php'";
 echo"</script>";


 ?>
