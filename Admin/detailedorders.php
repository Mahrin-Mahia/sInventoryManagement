<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Order Details</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  	<style>
  		th{
  			color: #fff;
  			background-color: #474747;
  		}
  		td{
  			background-color: #A8A7A7;
  			color: black;
  		}
  	</style>
</head>
<body>
	<?php
  $email = $_SESSION['email'];
  ?>

   <div id="wrapper">
     <?php require_once 'header/menu.php'; ?>

     <div class="container" style="background-color:#f2f2f2  ;box-shadow: 0 2px 3px rgba(0,0,0,0.15);border-radius: 5px;padding: 20px;">

     	<table class="table table-bordered ">
  <thead>
    <tr>

      <th scope="col">Order ID</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity (kg)</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Total Price</th>

    </tr>
  </thead>
  <tbody>
		<?php
				$orderid=$_GET['id'];
				$sql=mysqli_query($conn, "SELECT * from orderhistory where order_id='$orderid'");
				foreach ($sql as $key) {
					echo "<tr>

			      <td scope='row'>".$key['order_id']."</td>
						<td scope='row'>".$key['name']."</td>
            <td scope='row'>".$key['quantity']."</td>
            <td scope='row'>".$key['unit_price']."</td>
            <td scope='row'>".$key['total_price']."</td>



			    </tr> ";
				}

		 ?>
     <tr>
       <th colspan="4"><span class="pull-right">Sub-Total</span>  </th>
       <?php
        $sql0 = mysqli_query($conn, "SELECT sum(total_price) as total FROM orderhistory where order_id='$orderid'");
        $pro=mysqli_fetch_assoc($sql0);
          $total=$pro['total'];
          echo "<th>".$total."</th>";
        ?>
     </tr>
     <tr>
       <th colspan="4"><span class="pull-right">Delivery Cost</span>  </th>
       <?php $dc=100;
       echo "<th>".$dc."</th>"; ?>
     </tr>
     <tr>
       <th colspan="4"><span class="pull-right">Grand Total</span>  </th>
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
