<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<?php
      $status=$_GET['status'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Order Status</title>
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
      <th scope="col">Change Order Status</th>
      <th scope="col">Submit</th>


    </tr>
  </thead>
  <tbody>

		 <tr>


            <?php
            $orderid=$_GET['id'];
            echo "<td scope='row'>".$orderid."  </td>";
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
             ?>

            <td scope="row">
              <form  method="post">
                <div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
    				<input class="form-check-input" type="radio" name="radio" id="radio1" value="0" required >
    										<label class="form-check-label" for="radio1"> <span class='glyphicon glyphicon-check'> Order taken </span> </label><br>

    			  <input class="form-check-input" type="radio" name="radio" id="radio2" value="1" required>
                  <label class="form-check-label" for="radio2"> <span class='glyphicon glyphicon-time'> Order in process</span></label><br>

    			  <input class="form-check-input" type="radio" name="radio" id="radio3" value="2" required>
                  <label class="form-check-label" for="radio3"><span class='glyphicon glyphicon-plane'> Order on the way</span></label><br>
                  <input class="form-check-input" type="radio" name="radio" id="radio4" value="3" required>
                        <label class="form-check-label" for="radio3"><span class='glyphicon glyphicon-ok'> Order delivered</span></label><br>
            </td>
            <td><button type="submit" name="sub1" class="btn btn-success">Change</button></td>

              </form>

			    </tr>
<?php
if (isset($_POST["sub1"])) {
  $newstatus=$_POST["radio"];
  mysqli_query($conn,"UPDATE orderstatus SET cur_status='$newstatus'
 WHERE order_id='$orderid'");
 echo '<script type="text/javascript">';

// redirect to homepage
echo"window.location.href = 'vieworderstatus.php'";
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
