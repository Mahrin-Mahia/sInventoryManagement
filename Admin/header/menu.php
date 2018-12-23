<nav class="navbar navbar-inverse" >
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#"><b>SKI</b></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li ><a href="home.php">Home</a></li>
<li ><a href="adhome.php">User</a></li>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Orders<span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="orders.php">View Orders</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="vieworderstatus.php">Order Status</a></li>

  </ul>
</li>
<li ><a href="grocery.php">Supershop</a></li>
<li ><a href="viewfeedback.php">Feedbacks</a></li>

</ul>

<ul class="nav navbar-nav navbar-right">
  <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px"></span><span class="glyphicon glyphicon-bell"></span></a>
   <ul class="dropdown-menu scrollable-menu">
     <?php

     $sqln=mysqli_query($conn, "SELECT * FROM orderstatus where cur_status='0' ORDER BY order_id DESC");
     foreach ($sqln as $key ) {
       # code...
     $orderid=$key['order_id'];
     $sql420=mysqli_query($conn, "SELECT * FROM orderid where order_id='$orderid'");
     $pro=mysqli_fetch_assoc($sql420);
       $datetime=$pro['order_date'];
      echo "<li><a href='orders.php'>Order ".$orderid.", You have got new order. Please check.<br><small><em>  ".$datetime."</em></small></a></li>";
      echo "<li role='separator' class='divider'></li>";
     }
      ?>
   </ul>
  </li>
  <?php

  if (!isset($_SESSION['email'])) {
      echo "<li><a href='adminindex.php'>Login</a></li>";
  } else {
      echo "<li><a  href = 'logout.php'>Logout</a>";
  }
  ?>

</ul>
</div><!-- /.navbar-collapse -->

</div><!-- /.container-fluid -->

</nav>
