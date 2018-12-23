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
    <title>Order History</title>
  </head>
  <body>
    <?php
    $email = $_SESSION['email'];
    ?>
    <div class="wrapper">
        <?php require_once 'header/menu.php'; ?>
        <div class="container">
          <h1>Order History</h1><hr>
          <table class="table table-striped table-hover table-bordered">
            <tbody>
              <tr>
                <th>Date</th>
                <th>Order Id</th>
                <th>Status</th>
                <th>View</th>
              </tr>
              <?php
              $sql1 = mysqli_query($conn, "SELECT * FROM orderid where user_email='$email'");
              foreach ($sql1 as $key) {
                echo "<tr>";
                echo "<td>".$key['order_date']."</td>";
                echo "<td> Order#".$key['order_id']."</td>";
                $order_id=$key['order_id'];
                $sql0 = mysqli_query($conn, "SELECT cur_status FROM orderstatus inner join orderid on orderstatus.order_id=orderid.order_id where orderstatus.order_id='$order_id'");
                $pro=mysqli_fetch_assoc($sql0);
                  $status=$pro['cur_status'];
                $a0=0;
                $a1=1;
                $a2=2;
                $a3=3;
                if ($status==$a0) {
                echo "<td><span class='glyphicon glyphicon-check'> Order taken </span></td>";
                }
                elseif ($status==$a1) {
                echo "<td><span class='glyphicon glyphicon-time'> Order in process</span></td>";
                }
                elseif ($status==$a2) {
                echo "<td><span class='glyphicon glyphicon-plane'> Order on the way</span></td>";
                }
                elseif ($status==$a3) {

                echo "<td><span class='glyphicon glyphicon-ok'> Order delivered</span></td>";
                }

                echo "<td><a href='detailorderhistory.php?id=".$key['order_id']."&date=".$key['order_date']."' class='btn btn-success'><span class='fa fa-eye'></span></a></td>";
                echo "</tr>";
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
