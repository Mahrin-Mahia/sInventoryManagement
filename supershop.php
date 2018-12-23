<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>SuperShop </title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/supershopstyle.css">

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
             <h2>SuperShop Items</h2>
           </div>
          </div>
       </div>
     </div>

     <hr>

     <div class="container">

       <div class="row">
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post" >
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='1'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="1"> <h4><?php echo "$name"; ?></h4>
          <img src="image/1.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

            <div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
				<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
										<label class="form-check-label" for="radio1"> 1 kg</label>

			  <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
              <label class="form-check-label" for="radio2"> 2 kg</label>

			  <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
              <label class="form-check-label" for="radio3"> 3 kg</label>
				<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
		                <label class="form-check-label" for="radio4"> 4 kg</label>
			  <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
              <label class="form-check-label" for="radio5"> 5 kg</label>
			</div>

			<?php if ($available>=$a) {
				# code...
				echo "<button type='submit' name='sub1' class='btn btn-info'>Place Order</button>";
			}
			else {
				echo "<button type='submit' name='sub1' class='btn btn-info' disabled>Place Order</button>";
			} ?>
			<?php
		if (isset($_POST["sub1"])) {
			$name;
			$quantity=$_POST["radio"];
			$price;
			echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

		}

			 ?>

          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='2'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
					<div class="compartment" id="2"> <h4><?php echo "$name"; ?></h4>
        <img src="image/2.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
				<?php if ($available>=$a) {
					echo "<p style='min-height:25px; color: green'>In stock</p>";
				}
				else {
					echo "<p style='min-height:25px; color: red'>Out of stock</p>";
				} ?>
				<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
		<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
								<label class="form-check-label" for="radio1"> 1 kg</label>

		<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
					<label class="form-check-label" for="radio2"> 2 kg</label>

		<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
					<label class="form-check-label" for="radio3"> 3 kg</label>
		<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
								<label class="form-check-label" for="radio4"> 4 kg</label>
		<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
					<label class="form-check-label" for="radio5"> 5 kg</label>
	</div>

	<?php if ($available>=$a) {
		# code...
		echo "<button type='submit' name='sub2' class='btn btn-info'>Place Order</button>";
	}
	else {
		echo "<button type='submit' name='sub2' class='btn btn-info' disabled>Place Order</button>";
	} ?>
	<?php
if (isset($_POST["sub2"])) {
	$name;
	$quantity=$_POST["radio"];
	$price;
	echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

}

	 ?>
          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
        <form method="post">
					<?php
					$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='3'");
					while ($pro = mysqli_fetch_array($sql1)) {
						$name=$pro['name'];
						$available=$pro['available_kg'];
						$price=$pro['pr_p_u'];
						$a='5';

					}
					 ?>
					<div class="compartment" id="3"> <h4><?php echo "$name"; ?></h4>
          <img src="image/3.jpg"><p class="ptitle" style="min-height: 25px;">Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>
					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub3' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub3' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub3"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>


			 <a class="paging_box">
 			 <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
 			 <form method="post">
 				 <?php
 				 $sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='21'");
 				 while ($pro = mysqli_fetch_array($sql1)) {
 					 $name=$pro['name'];
 					 $available=$pro['available_kg'];
 					 $price=$pro['pr_p_u'];
 					 $a='5';

 				 }
 					?>
 				 <div class="compartment" id="4"> <h4><?php echo "$name"; ?></h4>
 				 <img src="image/21.jpg"><p class="ptitle" style="min-height: 25px;">Price (per kg):<?php echo "$price"; ?></p>
 				 <?php if ($available>=$a) {
 					 echo "<p style='min-height:25px; color: green'>In stock</p>";
 				 }
 				 else {
 					 echo "<p style='min-height:25px; color: red'>Out of stock</p>";
 				 } ?>
 				 <div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
 		 <input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
 								 <label class="form-check-label" for="radio1"> 1 kg</label>

 		 <input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
 					 <label class="form-check-label" for="radio2"> 2 kg</label>

 		 <input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
 					 <label class="form-check-label" for="radio3"> 3 kg</label>
 		 <input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
 								 <label class="form-check-label" for="radio4"> 4 kg</label>
 		 <input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
 					 <label class="form-check-label" for="radio5"> 5 kg</label>
 	 </div>

 	 <?php if ($available>=$a) {
 		 # code...
 		 echo "<button type='submit' name='sub4' class='btn btn-info'>Place Order</button>";
 	 }
 	 else {
 		 echo "<button type='submit' name='sub4' class='btn btn-info' disabled>Place Order</button>";
 	 } ?>
 	 <?php
  if (isset($_POST["sub4"])) {
 	 $name;
 	 $quantity=$_POST["radio"];
 	 $price;
 	 echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

  }

 		?>
 				 </div>
 				 </form>
 			 </div>
 			</a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='5'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="5"> <h4><?php echo "$name"; ?></h4>
          <img src="image/5.jpg"><p class="ptitle" style="min-height: 25px;">Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub5' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub5' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub5"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='6'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="6"> <h4><?php echo "$name"; ?></h4>
          <img src="image/6.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub6' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub6' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub6"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>


       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='7'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="7"> <h4><?php echo "$name"; ?></h4>
          <img src="image/7.jpg"><p class="ptitle" style="min-height: 25px;">Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub7' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub7' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub7"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='22'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="8"> <h4><?php echo "$name"; ?></h4>
          <img src="image/22.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub8' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub8' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub8"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='9'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="9"> <h4><?php echo "$name"; ?></h4>
          <img src="image/9.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub9' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub9' class='btn btn-info' disabled>Place Order</button>";
		} ?><?php
	if (isset($_POST["sub9"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>



       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='10'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="10"><h4><?php echo "$name"; ?></h4>
          <img src="image/10.jpg"><p class="ptitle" style="min-height: 25px;">Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub10' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub10' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub10"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='11'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="11"> <h4><?php echo "$name"; ?></h4>
          <img src="image/11.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub11' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub11' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub11"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='12'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="12"><h4><?php echo "$name"; ?></h4>
          <img src="image/12.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub12' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub12' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub12"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>


       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='13'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="13"> <h4><?php echo "$name"; ?></h4>
          <img src="image/13.jpg"><p class="ptitle" style="min-height: 25px;">Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>


		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub13' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub13' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub13"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='14'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="14"><h4><?php echo "$name"; ?></h4>
          <img src="image/14.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub14' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub14' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub14"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='15'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="15"><h4><?php echo "$name"; ?></h4>
          <img src="image/15.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub15' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub15' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub15"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>


       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='16'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="16"> <h4><?php echo "$name"; ?></h4>
          <img src="image/16.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub16' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub16' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub16"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='17'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="17"> <h4><?php echo "$name"; ?></h4>
          <img src="image/17.jpg"><p class="ptitle" style="min-height: 25px;">Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>
		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub17' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub17' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub17"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>


          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='18'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="18"> <h4><?php echo "$name"; ?></h4>
          <img src="image/18.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub18' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub18' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub18"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>

       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='19'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="19"><h4><?php echo "$name"; ?></h4>
          <img src="image/19.jpg"><p class="ptitle" style="min-height: 25px;"> Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>

		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub19' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub19' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub19"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>
       <a class="paging_box">
        <div class="col-lg-4 col-md-4 col-sm-6 grid" style="margin-bottom: 20px;">
          <form method="post">
						<?php
						$sql1 = mysqli_query($conn, "SELECT * FROM groceries  where grocery_id='20'");
						while ($pro = mysqli_fetch_array($sql1)) {
							$name=$pro['name'];
							$available=$pro['available_kg'];
							$price=$pro['pr_p_u'];
							$a='5';

						}
						 ?>
          <div class="compartment" id="20"><h4><?php echo "$name"; ?></h4>
          <img src="image/20.jpg"><p class="ptitle" style="min-height: 25px;">Price (per kg):<?php echo "$price"; ?></p>
					<?php if ($available>=$a) {
						echo "<p style='min-height:25px; color: green'>In stock</p>";
					}
					else {
						echo "<p style='min-height:25px; color: red'>Out of stock</p>";
					} ?>

					<div class="form-check form-check-inline" style="color: #444; font-size: 14px; margin: 0 0 10px;">
			<input class="form-check-input" type="radio" name="radio" id="radio1" value="1" required >
									<label class="form-check-label" for="radio1"> 1 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio2" value="2" required>
						<label class="form-check-label" for="radio2"> 2 kg</label>

			<input class="form-check-input" type="radio" name="radio" id="radio3" value="3" required>
						<label class="form-check-label" for="radio3"> 3 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio4" value="4" required>
									<label class="form-check-label" for="radio4"> 4 kg</label>
			<input class="form-check-input" type="radio" name="radio" id="radio5" value="5" required>
						<label class="form-check-label" for="radio5"> 5 kg</label>
		</div>
		<?php if ($available>=$a) {
			# code...
			echo "<button type='submit' name='sub20' class='btn btn-info'>Place Order</button>";
		}
		else {
			echo "<button type='submit' name='sub20' class='btn btn-info' disabled>Place Order</button>";
		} ?>
		<?php
	if (isset($_POST["sub20"])) {
		$name;
		$quantity=$_POST["radio"];
		$price;
		echo "<script>window.open('s_cart.php?name=$name&amount=$quantity&price=$price','_self')</script>";

	}

		 ?>
          </div>
          </form>
        </div>
       </a>
       </div>





     </div>


</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
