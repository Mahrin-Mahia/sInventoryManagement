<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
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
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
			<th scope="col">Contact</th>
			<th scope="col">Address</th>
			<th scope="col">View Cabinets</th>
    </tr>
  </thead>
  <tbody>
		<?php
				$sql=mysqli_query($conn, "SELECT * from user");
				foreach ($sql as $key) {
					echo "<tr>
			      <td scope='row'>".$key['id']."</td>
						<td scope='row'>".$key['name']."</td>
						<td scope='row'>".$key['email']."</td>
						<td scope='row'>".$key['password']."</td>
						<td scope='row'>0".$key['contact_no']."</td>
						<td scope='row'>".$key['address']."</td>
						<td><a href='seecabinet.php?id=".$key['email']."' class='btn btn-success'><span class='fa fa-eye'></span></a></td>

			    </tr> ";
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
