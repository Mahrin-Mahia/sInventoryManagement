<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>

    <title>Login | User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Smart Kitchen Inventory</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="indexfeedback.php">Feedback</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="usersignup.php">Signup  <i class="fa fa-user-plus"></i></a></li>
        <li><a href="userlogin.php">Login  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
    <div class="container-fluid ls" style="height: 100vh;">
    	<div class="row justify-content-md-center">
    	   <div class="col-lg-4 col-md-6 col-sm-4"></div>
    	   <div class="col-lg-4 col-md-6 col-sm-6">
    	   <form class="form-container" style="margin-bottom: 16vh;" method="post">
         <h2>Log In</h2>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
			  </div>


			  <button type="submit" name="submit" class="btn btn-warning btn-block">Submit</button>
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


    $sql_query = "SELECT email, password FROM user WHERE email = '$email' AND password = '$password'";

    $login_acc = mysqli_query($conn, $sql_query);
    $check = mysqli_num_rows($login_acc);


    if ($check == 0) {
        echo "<script>alert('Incorrect combination. Please try again.')</script>";
        echo "<script>window.open('userlogin.php','_self')</script>";
    } else {
        $_SESSION['email'] = $email;
        echo "<script>alert('Login successful.')</script>";
        echo "<script>window.open('profile.php?email=$email','_self')</script>";
    }
}
?>
