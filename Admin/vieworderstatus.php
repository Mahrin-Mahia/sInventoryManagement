<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Order Status</title>
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
      <th scope="col">Order Status</th>

      <th scope="col">Change</th>

    </tr>
  </thead>
  <tbody>
		<?php
				$sql=mysqli_query($conn, "SELECT * from orderstatus ");
				foreach ($sql as $key) {
					echo "<tr>

			      <td scope='row'>".$key['order_id']."</td>";
						$id=$key['order_id'];
						$cur=$key['cur_status'];
						$a0=0;
						$a1=1;
						$a2=2;
						$a3=3;
						if ($cur==$a0) {
						echo "<td><span class='glyphicon glyphicon-check'> Order taken </span></td>";
						}
						elseif ($cur==$a1) {
						echo "<td><span class='glyphicon glyphicon-time'> Order in process</span></td>";
						}
						elseif ($cur==$a2) {
						echo "<td><span class='glyphicon glyphicon-plane'> Order on the way</span></td>";
						}
						elseif ($cur==$a3) {

						echo "<td><span class='glyphicon glyphicon-ok'> Order delivered</span></td>";
						}

						 // <td scope='row'>".$key['cur_status']."</td>
						 if ($cur==$a3) {

 							echo "<td><a href='changeorderstatus.php?id=".$id."&status=".$cur."' class='btn btn-success' disabled><span class='fa fa-eye'></span></a></td></tr>";
						 }
						 elseif($cur==$a2||$cur==$a1||$cur==$a0) {
							 echo "<td><a href='changeorderstatus.php?id=".$id."&status=".$cur."' class='btn btn-success'><span class='fa fa-eye'></span></a></td>

	 			    </tr> ";
						 }


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
