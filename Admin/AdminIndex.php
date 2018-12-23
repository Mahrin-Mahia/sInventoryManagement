<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin|Login</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>


       <div class="container-fluid ls">

    	<div class="row justify-content-md-center">
    	   <div class="col-lg-4 col-md-4 col-sm-4"></div>
    	   <div class="col-lg-4 col-md-4 col-sm-4">
    	   <h1>Smart Kitchen Inventory</h1>

    	   <hr>
    	   <h4>Welcome Boss!!!</h4>
    	   <form class="form-container" method="post">
             <h2>Log In</h2>
			  <div class="form-group">
			    <label for="InputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" id="InputEmail1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="InputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
			  </div>
			  <div class="checkbox">
			    <label>
			    <input type="checkbox"> Remember me
			    </label>
			  </div>
			  <button type="submit" name="submit" class="btn btn-success btn-block">Submit</button>
           </form>

    	   </div>

    	</div>
    </div>




<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql_query = "SELECT email, password FROM admin WHERE email = '$email' AND password = '$password'";

    $login_acc = mysqli_query($conn, $sql_query);
    $check = mysqli_num_rows($login_acc);


    if ($check == 0) {
        echo "<script>alert('Incorrect combination. Please try again.')</script>";
        echo "<script>window.open('adminindex.php','_self')</script>";
    } else {
        $_SESSION['email'] = $email;
        echo "<script>alert('Login successful.')</script>";
        echo "<script>window.open('home.php?email=$email','_self')</script>";
    }
}
?>
