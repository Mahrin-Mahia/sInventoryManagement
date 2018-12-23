<?php
		session_start();
    require_once 'config/db.php';
		$email = $_SESSION['email'];
    $id=$_GET['id'];
    $name=$_GET['name'];
    $amount=$_GET['amount'];
    // echo "$id <br> $name";
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Update Amount</title>
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


       <div id="wrapper">
    		 <?php require_once 'header/menu.php'; ?>

         <div class="container" style="background-color:#f2f2f2  ;box-shadow: 0 2px 3px rgba(0,0,0,0.15);border-radius: 5px;padding: 20px;">

         	<table class="table table-bordered ">
      <thead>
        <tr>

          <th scope="col">Name</th>
          <th scope="col">Available (kg)</th>
          <th scope="col">Update </th>
          <th scope="col">Submit</th>

        </tr>
      </thead>
      <tbody>
    		<?php

    					echo "<tr>
    			      <td scope='row'>".$name."</td>
                <td scope='row'>".$amount."</td>";
                ?>
                <form class="" method="post">
                  <td><input type="text" name="update" value="" style="border-radius:2px" required></td>
                  <td> <input type="submit" name="sub" class=" btn btn-success" value="Update"> </td>
                </form>
    			    </tr> ";
<?php
if (isset($_POST["sub"])) {
  $value=$_POST["update"];
  mysqli_query($conn,"UPDATE groceries SET available_kg='$value'
 WHERE name='$name' and grocery_id=$id");
echo '<script type="text/javascript">';
echo"window.location.href = 'grocery.php'";
echo"</script>";
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
