<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="css/font.css">
    <title>Cart</title>

  </head>
  <body>
    <?php
    $email = $_SESSION['email'];
    ?>
    <div class="wrapper">
      <?php require_once 'header/menu.php'; ?>
      <div class="container">
        <h1>Invoice</h1><hr>
        <h5 class="pull-right">Date: <?php date_default_timezone_set("Asia/Dhaka"); echo date('y.m.d'); ?> </h5><br>
        <br><p class="pull-right">Time: <?php date_default_timezone_set("Asia/Dhaka"); echo date('h:i:sa'); ?> </p>
        <?php
          $sql14 = mysqli_query($conn, "SELECT * FROM user where email='$email'");
          while ($pro=mysqli_fetch_assoc($sql14)) {
            $name=$pro['name'];
            $address=$pro['address'];
            $phone=$pro['contact_no'];
            echo "<h4>Name: $name</h4> ";
            echo "<p>Mailing Address: $address </p>";
            echo "<p>Phone: 0$phone</p>";
          }

         ?>
        <table class="table table-striped table-hover table-bordered">
          <tbody>
            <tr>
              <th>Item</th>
              <th>Quantity</th>
              <th>Unit Price</th>
              <th>Total Price</th>
              <th></th>
            </tr>
            <?php
            $sql1 = mysqli_query($conn, "SELECT * FROM cart where user_email='$email'");
            foreach ($sql1 as $key) {
              # code...
              echo "<tr>";
              echo "<td>".$key['com_name']."</td>";
              echo "<td>".$key['amount']." kg</td>";
              echo "<td>".$key['price']."</td>";
              echo "<td>".$key['total_price']."</td>";

              echo "<td><a href='removefromcart.php?name=".$key['com_name']."&amount=".$key['amount']."&price=".$key['price']."&totalprice=".$key['total_price']."' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span></a></td>";
              echo "</tr>";
            }
              ?>
              <tr>
                <th colspan="3"><span class="pull-right">Sub-Total</span>  </th>
                <?php
                 $sql0 = mysqli_query($conn, "SELECT sum(total_price) as total FROM cart where user_email='$email'");
                 $pro=mysqli_fetch_assoc($sql0);
                   $total=$pro['total'];
                   echo "<th colspan='2' >".$total."</th>";
                 ?>
              </tr>
              <tr>
                <th colspan="3"><span class="pull-right">Delivery Cost</span>  </th>
                <?php
                $sqlasdf = mysqli_query($conn, "SELECT sum(total_price) as total FROM cart where user_email='$email'");
                $pro=mysqli_fetch_assoc($sqlasdf);
                  $total=$pro['total'];
                  if ($total<100) {
                    $dc=0;
                  }
                  else {
                    $dc=100;
                  }

                echo "<th colspan='2'>".$dc."</th>"; ?>


              </tr>

              <tr>
                <th colspan="3"><span class="pull-right">Grand Total</span>  </th>
                <?php
                 
                 $gt=$total+$dc;

                echo "<th colspan='2'>".$gt."</th>"; ?>
              </tr>
              <td colspan="2"><a href="supershop.php" class="btn btn-primary">Continue Shopping</a> </td>
              <?php if ($gt>$dc) {
                # code...
                echo " <td colspan='3'><span class='pull-right'> <a href='checkout.php?email=$email' class='btn btn-success'><span class='fa fa-shopping-cart'></span>&nbsp; Checkout</a>  </td>";
              }
              else {
                echo " <td colspan='3'><span class='pull-right'> <a href='checkout.php?email=$email' class='btn btn-success' disabled><span class='fa fa-shopping-cart'></span>&nbsp; Checkout</a>  </td>";
              }
               ?>





          </tbody>

        </table>

      </div>



    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
