<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Kitchen Inventory</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <link rel="stylesheet" type="text/css" href="css/app.css">
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

 <div class="container">
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="content">
 				<h1>Smart Kitchen Inventory</h1>
 				<h3>A smarter way to digitalize your kitchen inventory</h3>
        <h4><b>Smart Inventory Management System (SIMS) initially for households as well as restaurants. It is an IOT based project. With this, you can easily see how much of what item you have. Also, you can order thing over mobile from nearby mega shops or super shops. Super shops can also access your inventory items and will notify you whether you want your next bazaar tomorrow or not. This smarter version of kitchen inventory will make your life even more efficient and smarter. </h4>

 	<!--			<button class="btn btn-default btn-lg"><i class="fa fa-paw fa-fw"></i> Get Started!</button> -->
 			</div>
 		</div>
 	</div>
 </div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</body>
</html>
