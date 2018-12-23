<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Supershop</title>
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

      <th scope="col">Name</th>
      <th scope="col">Available (kg)</th>
      <th scope="col">Price (per kg)</th>
      <th scope="col">Update Grocery</th>
			<th scope="col">Update Price</th>


    </tr>
  </thead>
  <tbody>
		<?php
				$sql=mysqli_query($conn, "SELECT * from groceries");
				foreach ($sql as $key) {
					echo "<tr>
			      <td scope='row'>".$key['name']."</td>
						<td scope='row'>".$key['available_kg']."</td>
						<td scope='row'>".$key['pr_p_u']."</td>
						<td><a href='updategrocery.php?id=".$key['grocery_id']."&name=".$key['name']."&amount=".$key['available_kg']."' class='btn btn-success'><span class='glyphicon glyphicon-pencil'></span></a></td>
						<td><a href='updategroceryprice.php?id=".$key['grocery_id']."&name=".$key['name']."&price=".$key['pr_p_u']."' class='btn btn-success'><span class='glyphicon glyphicon-pencil'></span></a></td>


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
