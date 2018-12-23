<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>List Generator</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="datepicker.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="datepicker/css/datepicker.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript">
   	$(function(){
   		$('.datepicker').datepicker();
   	});
   </script>
</head>
<body>
	<?php
	$email = $_SESSION['email'];
	?>

   <div id="wrapper">
        <?php require_once 'header/menu.php'; ?>

      <div class="page-banner" >
       <div class="container">
         <div class="row">
           <div class="col-md-6">
             <h2>List Generator</h2>
           </div>
          </div>
       </div>
     </div>
     <hr style="border-top: 2px solid #f8f8f8;border-bottom: 2px solid rgba(0,0,0,0.2);">

   <div class="container" style="background-color: #f2f2f2;box-shadow: 0 2px 3px rgba(0,0,0,0.15);border-radius: 5px;padding: 20px;">
   	<div class="container">
    <div class="row">
      <form class="" method="post">
        <div class='col-md-4 col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datepicker'>
                    From Date: <input type="text" name="date1" class="datepicker">

                </div>
            </div>
        </div>
        <div class='col-md-4 col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datepicker'>
                    To Date: <input type="text" name="date2" class="datepicker">

                </div>
            </div>
        </div>
        <div class='col-md-4 col-sm-6'>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success">Submit</button>

                </div>
            </div>

      </form>

        </div>



    </div>
</div>

   </div>


  </div>


</body>
</html>



  <?php
      if (isset($_POST["submit"]))
      {
        $from_date=$_POST["date1"];
        $to_date=$_POST["date2"];

        $newfromdate = date("y-m-d", strtotime($from_date));
        $newtodate = date("y-m-d", strtotime($to_date));
        if ($newfromdate>$newtodate) {
          echo "<script>alert('Invalid date input.')</script>";
        }
        else {
          date_default_timezone_set("Asia/Dhaka");
          $date= date('y-m-d');
          if ($newtodate>$date) {
            # code...
            echo "<script>alert('Invalid date input.')</script>";
          }
          else {
            echo "<br>";

            echo "<div class='container' style='background-color: #f2f2f2;box-shadow: 0 2px 3px rgba(0,0,0,0.15);border-radius: 5px;padding: 20px;'>";
            echo "<h3>List from date 20".$newfromdate." to date 20".$newtodate."</h3>";
            echo "<table class='table table-striped table-hover table-bordered'>
              <tbody>
                <tr>
                  <th>Name</th>
                  <th>Quantity</th>
                  <th> Previous Total Price</th>
									<th> Current Total Price</th>
                </tr>";
								$atp=0;
            $sql1 = mysqli_query($conn, "SELECT oh.name as name, SUM(oh.quantity) as quantity, SUM(oh.total_price) as totalprice FROM `orderhistory` oh INNER JOIN orderid oi on oh.order_id=oi.order_id WHERE oi.user_email='$email' and oi.order_date BETWEEN '$newfromdate' AND '$newtodate' GROUP BY oh.name");
            //echo "$newfromdate <br> $newtodate";
            foreach ($sql1 as $key ) {
              echo "<tr>";
              echo "<td>".$key['name']."</td>";
              echo "<td>".$key['quantity']." kg</td>";
              echo "<td>".$key['totalprice']."</td>";
							$abcd=$key["name"];
							$efgh=$key["quantity"];
							$sql123 = mysqli_query($conn, "select pr_p_u from groceries where name='$abcd'");
							foreach ($sql123 as $value) {

								$np=$value["pr_p_u"];
								$tp=$efgh*$np;
								echo "<td>".$tp."</td>";
								$atp=$atp+$tp;
							}

              echo "</tr>";
            }
              $sql2 = mysqli_query($conn, "SELECT SUM(oh.total_price) as totalprice FROM `orderhistory` oh INNER JOIN orderid oi on oh.order_id=oi.order_id WHERE oi.user_email='$email' and oi.order_date BETWEEN '$newfromdate' AND '$newtodate'");
              $pro=mysqli_fetch_assoc($sql2);
                $total=$pro['totalprice'];

                echo "<tr>";
                  echo "<th colspan='2'><span class='pull-right'>Total Cost</span>  </th>";
                  echo "<th>".$total."</th>";
									echo "<th>".$atp."</th>";


            echo "</div>";

          }

        }

        // if ($from_date>$to_date)
        // {echo "wrong";}
        // else {
        //   echo "right";
        // }

      }
  ?>
