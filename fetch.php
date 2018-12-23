<?php
//fetch.php;
session_start();
require_once 'config/db.php';
$email = $_SESSION['email'];
if(isset($_POST["view"]))
{

 if($_POST["view"] != '')
 {
  $update_query = "UPDATE shownotif SET notif_status=1 WHERE user_email='$email' and notif_status='0'";
  mysqli_query($conn, $update_query);
 }
 // $sqln=mysqli_query($conn, "SELECT * FROM shownotif where user_email='$email' ORDER BY notif_id DESC");
 // foreach ($sqln as $key ) {
 //   # code...
 //   $output .='<li><a href=""><strong>'.$key["notif_msg"].'</strong><br> on <small><em>'.$key["datetime"].'</em></small></a></li>
 //          <li role="separator" class="divider"></li>';
 // }

 $query = "SELECT * FROM shownotif where user_email='$email' ORDER BY notif_id DESC ";
 $result = mysqli_query($conn, $query);
 $output = '';

 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
  <li><a href=""><strong>'.$row["notif_msg"].'</strong><br> on <small><em>'.$row["datetime"].'</em></small></a></li>
       <li role="separator" class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }

 $query_1 = "SELECT * FROM shownotif WHERE notif_status='0' and user_email='$email' ";
 $result_1 = mysqli_query($conn, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>
