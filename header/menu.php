<style media="screen">
  .scrollable-menu{
    height: auto;
    max-height: 400px;
    overflow-x: hidden;
  }
</style>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="profile.php">Smart Kitchen Inventory</a>
</div>
<!--  to check orderstatus-->
<?php
$email = $_SESSION['email'];
  $sqloh = mysqli_query($conn, "SELECT * FROM orderstatus inner join orderid on orderstatus.order_id=orderid.order_id where orderid.user_email='$email'");
  foreach ($sqloh as $key) {
    $id=$key['order_id'];
    $prev=$key['prev_status'];
    $cur=$key['cur_status'];
    if ($prev<$cur && $cur!=3) {
      $sqlu = mysqli_query($conn, "update orderstatus set prev_status='$cur' where order_id='$id'");
    }
    if ($prev<$cur && $cur==3) {

      date_default_timezone_set("Asia/Dhaka");
      $sqlu = mysqli_query($conn, "update orderstatus set prev_status='$cur' where order_id='$id'");
      $time=date("Y-m-d h:i:s");
      $notif_msg="Your Order ".$id.", has been delivered";
      $sql_query2 =mysqli_query($conn,"INSERT INTO shownotif (notif_id, datetime, user_email, notif_msg) VALUES (NULL, '$time','$email', '$notif_msg')");
    }
    else {
      $cur;

    }
  }
  ?>
  <!-- to check amount in users compartment  -->
  <?php
      $sqlaaaa=mysqli_query($conn, "SELECT cabinet_id from cabinetlist cl where cl.email='$email'");
      foreach ($sqlaaaa as $key) {
          # code...
            $cabinetid=$key['cabinet_id'];
              $sqlbbbb = mysqli_query($conn, "SELECT * FROM cabinet c where cabinet_id='$cabinetid'");
              foreach ($sqlbbbb as $value) {
                # code...
                $compartment=$value['com_id'];
                 $name=$value['com_name'];
                 $amount=$value['quantity'];
                 $temp=$value['temp'];
                 $tempcomp=strcmp($amount,$temp);
                 $bench=0;
                 if ($tempcomp!=$bench) {
                   mysqli_query($conn,"UPDATE cabinet SET temp='$amount'
                  WHERE com_id='$compartment' and cabinet_id=$cabinetid");
                  $sqltemp = mysqli_query($conn, "SELECT temp FROM cabinet where com_id='$compartment'");
                  $pro=mysqli_fetch_assoc($sqltemp);
                    $tempamount=$pro['temp'];
                        $a="10%";
                        $b="0%";
                        $c="2kg";
                        $d="1kg";
                        $e="0kg";
                        $f=0;

                        $c1=strcmp($tempamount,$a);
                        $c2=strcmp($tempamount,$b);
                        $c3=strcmp($tempamount,$c);
                        $c4=strcmp($tempamount,$d);
                        $c5=strcmp($tempamount,$e);
                        if ($c1==$f||$c2==$f||$c3==$f||$c4==$f||$c5==$f) {
                          date_default_timezone_set("Asia/Dhaka");

                          $time=date("Y-m-d h:i:s");
                          $notif_msg="Your item ".$name." from Cabinet ".$cabinetid." is running low. Please order";
                          $sql_query2 =mysqli_query($conn,"INSERT INTO shownotif (notif_id, datetime, user_email, notif_msg) VALUES (NULL, '$time','$email', '$notif_msg')");
                          # code...
                        }
                        else {
                          # code...
                        }
                 }
              }
      }
   ?>




<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">

  <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px"></span><span class="glyphicon glyphicon-bell"></span></a>
   <ul class="dropdown-menu scrollable-menu">
     <?php
     $sqln=mysqli_query($conn, "SELECT * FROM shownotif where user_email='$email' ORDER BY notif_id DESC");
     foreach ($sqln as $key ) {
       # code...
      echo "<li><a href='profile.php'>".$key['notif_msg']."<br><small><em>  ".$key['datetime']."</em></small></a></li>";
      echo "<li role='separator' class='divider'></li>";
     }
      ?>





   </ul>
  </li>







        <?php
        $email = $_SESSION['email'];

         $sql88 = mysqli_query($conn, "SELECT distinct user_email FROM cart where user_email='$email'");
         $pro=mysqli_fetch_assoc($sql88);
           $user_email=$pro['user_email'];
           $z=strcmp($user_email,$email);
           //echo "a=$email <br> b=$user_email <br> c=$z";
         if ($z=='0') {
           echo "  <li><a  href='cartshow.php' >
                     <span class='glyphicon glyphicon-shopping-cart'></span>
                   </a></li>";
           # code...
         }
         else {
           echo "  <li><a style='pointer-events: none;' href='cartshow.php' class='disabled'>
                     <span class='glyphicon glyphicon-shopping-cart'></span>
                   </a></li>";
         }

         ?>



</ul>

<ul class="nav navbar-nav navbar-right">
  <?php
  $sql88 = mysqli_query($conn, "SELECT Count(cabinet_id) as count FROM cabinetlist where email='$email'");
  $pro=mysqli_fetch_assoc($sql88);
    $count=$pro['count'];
    if ($count>1) {
      # code...
      echo "<li ><a href='profile.php'>Inventories</a></li>";
    }
    else {
      echo "<li ><a href='profile.php'>Inventory</a></li>";
    }


   ?>



  <li><a href="supershop.php">Manual Order</a></li>

 <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Services <span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="list.php">List Generator</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="orderhistory.php">Order History</a></li>
  </ul>
</li>

<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Profile <span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="addinventory.php">Add Inventory</a></li>
    <li><a href="removeinventory.php">Remove Inventory</a></li>
    <li><a href="settings.php">Settings</a></li>
    <li><a href="profileabout.php">About</a></li>
    <li><a href="profilecontact.php">Contact</a></li>
    <li><a href="feedback.php">Feedback</a></li>
    <li role="separator" class="divider"></li>
    <?php
    if (!isset($_SESSION['email'])) {
        echo "<li><a href='userlogin.php'>Login</a></li>";
    } else {
        echo "<li><a  href = 'logout.php'>Logout</a>";
    }
    ?>

  </ul>
</li>
</ul>
</div><!-- /.navbar-collapse -->

</div><!-- /.container-fluid -->
</nav>
<!-- <script>
$(document).ready(function(){

 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }

 load_unseen_notification();



 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });

 setInterval(function(){
  load_unseen_notification();;
 }, 5000);

});
</script> -->
