<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detailed Order History</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/font.css">
  </head>
  <body>
    <?php
    $email = $_SESSION['email'];
    $id=$_GET['id'];
    $date=$_GET['date'];
    // echo "$id <br> $date";
    ?>
    <div class="wrapper">
        <?php require_once 'header/menu.php'; ?>
      <div class="container">
        <h1>Detailed Order History</h1><hr>
        <h3> <?php echo "Order ID# $id"; ?> </h3>
        <h4> <?php echo "Order Date: $date"; ?> </h4>
        <table class="table table-striped table-hover table-bordered">
          <tbody>
            <tr>
              <th>Name</th>
              <th>Quantity(kg)</th>
              <th>Unit Price</th>
              <th>Total Price</th>
            </tr>
            <?php
            $sql1 = mysqli_query($conn, "SELECT * FROM orderhistory where order_id='$id'");
            foreach ($sql1 as $key) {
              # code...
              echo "<tr>";
              echo "<td>".$key['name']."</td>";
              echo "<td>".$key['quantity']." kg</td>";
              echo "<td>".$key['unit_price']."</td>";
              echo "<td>".$key['total_price']."</td>";
            }
              ?>
              <tr>
                <th colspan="3"><span class="pull-right">Sub-Total</span>  </th>
                <?php
                 $sql0 = mysqli_query($conn, "SELECT sum(total_price) as total FROM orderhistory where order_id='$id'");
                 $pro=mysqli_fetch_assoc($sql0);
                   $total=$pro['total'];
                   echo "<th>".$total."</th>";
                 ?>
              </tr>
              <tr>
                <th colspan="3"><span class="pull-right">Delivery Cost</span>  </th>
                <?php $dc=100;
                echo "<th>".$dc."</th>"; ?>
              </tr>
              <tr>
                <th colspan="3"><span class="pull-right">Grand Total</span>  </th>
                <?php
                 $dc=100;
                 $gt=$total+$dc;

                echo "<th>".$gt."</th>"; ?>
              </tr>

          </tbody>
      </table>
      </div>

    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
