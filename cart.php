<?php
		session_start();
    require_once 'config/db.php';
		$email = $_SESSION['email'];
    $amount=$_GET['cart_quantity'];
    $name=$_GET['cart_name'];
		$sql=mysqli_query($conn, "SELECT pr_p_u, available_kg from groceries where name='$name'");
		while ($pro = mysqli_fetch_array($sql)) {

			$price=$pro['pr_p_u'];
			$ak=$pro['available_kg'];


		}
		if ($ak>=5) {
			switch ($amount) {
				case '0%':
				$a=5;
				$newprice=$price*$a;
	      $sql_query00 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
	   VALUES (NULL, '$email', '$name','5','$price', '$newprice')");
	   echo "<script>alert('5kg has been added to your cart')</script>";
	        break;
	      case '10%':
				$a=5;
				$newprice=$price*$a;
	      $sql_query00 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
	   VALUES (NULL, '$email', '$name','5','$price', '$newprice')");
	   echo "<script>alert('5kg has been added to your cart')</script>";
	        break;

	      case '50%':
				$a=3;
				$newprice=$price*$a;
	      $sql_query01 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
	   VALUES (NULL, '$email', '$name','3','$price','$newprice')");
	   echo "<script>alert('3kg has been added to your cart')</script>";
	        break;

	      case '100%':
				$a=1;
				$newprice=$price*$a;
	      $sql_query02 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
	   VALUES (NULL, '$email', '$name','1','$price', '$newprice')");
	   echo "<script>alert('Your compartment is full. However, 1kg has been added to your cart')</script>";
	        break;
				case '0kg':
				$a=5;
				$newprice=$price*$a;
					$sql_query09 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
			 VALUES (NULL, '$email', '$name','5','$price', '$newprice')");
			 echo "<script>alert('5kg has been added to your cart')</script>";
						break;


					case '1kg':
					$a=4;
					$newprice=$price*$a;
					$sql_query03 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
			 VALUES (NULL, '$email', '$name','4','$price', '$newprice')");
			 echo "<script>alert('4kg has been added to your cart')</script>";
						break;
						case '2kg':
						$a=3;
						$newprice=$price*$a;
						$sql_query04 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
				 VALUES (NULL, '$email', '$name','3','$price', '$newprice')");
				 echo "<script>alert('3kg has been added to your cart')</script>";
							break;

							case '3kg':
							$a=2;
							$newprice=$price*$a;
							$sql_query05 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
					 VALUES (NULL, '$email', '$name','2','$price', '$newprice')");
					 echo "<script>alert('2kg has been added to your cart')</script>";
								break;
					case '4kg':
					$a=1;
					$newprice=$price*$a;
								$sql_query06 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
						 VALUES (NULL, '$email', '$name','1','$price', '$newprice')");
						 echo "<script>alert('1kg has been added to your cart')</script>";
									break;
						default:
						$a=1;
						$newprice=$price*$a;
						$sql_query06 =mysqli_query($conn,"INSERT INTO cart (id, user_email, com_name, amount, price, total_price)
				 VALUES (NULL, '$email', '$name','1','$price', '$newprice')");
				 echo "<script>alert('Your compartment is full. However, 1kg has been added to your cart')</script>";
							}
		}
		else {
			echo "<script>alert('Your item is not available right now. Please try again later.')</script>";
		}




			echo '<script type="text/javascript">';


	echo"window.location.href = 'profile.php'";
	echo"</script>";


 ?>
