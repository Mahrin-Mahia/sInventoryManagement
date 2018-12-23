<?php
session_start();
require_once 'config/db.php';
$email = $_SESSION['email'];


//SELECT * FROM `usernotification` join notification on usernotification.notif_id=notification.notif_id join user on user.email=usernotification.user_email where usernotification.user_email='$email'

 ?>
