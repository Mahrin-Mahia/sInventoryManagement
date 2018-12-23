<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<?php $user=$_GET['id']; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View Cabinets</title>
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

      <th scope="col">Email</th>
      <th scope="col">Cabinet ID</th>
      <th scope="col">Details</th>

    </tr>
  </thead>
  <tbody>
		<?php
				$sql=mysqli_query($conn, "SELECT * from cabinetlist where email='$user'");
				foreach ($sql as $key) {
					echo "<tr>

			      <td scope='row'>".$key['email']."</td>
						<td scope='row'>".$key['cabinet_id']."</td>

						<td><a href='seedetailedcabinet.php?id=".$key['cabinet_id']."' class='btn btn-success'><span class='fa fa-eye'></span></a></td>

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
