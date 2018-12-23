<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/settingsstyle.css">

</head>
<body>
	<?php
  $email = $_SESSION['email'];
  ?>
    <div id="wrapper">
      <?php require_once 'header/menu.php' ?>


     <div class="page-banner" >
       <div class="container">
         <div class="row">
           <div class="col-md-6">
             <h2>Settings</h2>
           </div>
          </div>
       </div>
     </div>

     <hr>
		 <div class="container" style="background-color: #f2f2f2;box-shadow: 0 2px 3px rgba(0,0,0,0.15);border-radius: 5px;padding: 20px;">
			 <form method="post">
  <div class="form-row align-items-center">
    <div class="form-group">
			<label class=""  for="inputfname">Name</label>
			<input type="text" class="form-control" id="inputfname" name="inputfname" placeholder="Name" required>
    </div>

  </div>
  <div class="form-group">
  	<button type="submit" name="sub11" class="btn btn-success" action="" >Submit</button>
  </div>

  </form>
		 <?php
		 if (isset($_POST['sub11'])) {
		 $email = $_SESSION['email'];
		 $name = $_POST["inputfname"];

		 	mysqli_query($conn,"UPDATE user SET name='$name'
		 	WHERE email='$email'");
			echo "<script>alert('Name has been changed.')</script>";
		 }


		  ?>

  </form>
	<form method="post">
  <div class="form-row align-items-center">
    <div class="form-group">
      <label for="inputPassword">Change Password</label>
			<input type="password" class="form-control" id="inputpassword" name="inputpassword" placeholder="Change Password" required><small class="text-muted" >
			Must be 6-8 characters long.
    </small>
    </div>
    <div class="form-group">
      <label for="inputCoPassword">Confirm Password</label>
			<input type="password" class="form-control" id="inputcopassword" name="inputcopassword" placeholder="Confirm Password" required><small class="text-muted">
			Must be 6-8 characters long.
    </small>
    </div>
  </div>
     <div class="form-group">
  	<button type="submit" name="sub2" class="btn btn-success">Submit</button>
  </div>
  </form>
		 <?php
		 if (isset($_POST['sub2'])) {
			 $p1= $_POST["inputpassword"];

		 $p2 = $_POST["inputcopassword"];
		 if ($p1==$p2) {
			 mysqli_query($conn,"UPDATE user SET password='$p1' , confirm_password='$p2'
 		 	WHERE email='$email'");
			 echo "<script>alert('password changed.')</script>";
		 }
		 else {
		 	  echo "<script>alert('Wrong attempt. Please try again.')</script>";
		 }

		 }

		  ?>
			<form method="post">
			  <div class="form-row align-items-center">
			   <div class="form-group">
			    <label for="inputAddress">Change Address</label>
			   <input type="text" class="form-control" id="inputaddress" name="inputaddress" placeholder="Address" required>
			   </div>
			    <div class="form-group">
			     <button type="submit" name="sub3" class="btn btn-success">Submit</button>
			    </div>
			  </div>
			  </form>
		 <?php
		 if (isset($_POST['sub3'])) {

		 $address = $_POST["inputaddress"];
		 	mysqli_query($conn,"UPDATE user SET address='$address'
		 	WHERE email='$email'");
echo "<script>alert('Address has been updated.')</script>";
		 }


		  ?>
			<form method="post">
				<div class="form-row align-items-center">
   <div class="form-group">
    <label for="inputContact">Change Contact No</label>
			   <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Contact No" required>
			   </div>
			   <div class="form-group">
			     <button type="submit" name="sub4" class="btn btn-success">Submit</button>
			    </div>
			  </div>
			</form>


		 <?php
		 if (isset($_POST['sub4'])) {

		 $contact = $_POST["phonenumber"];
		 	mysqli_query($conn,"UPDATE user SET contact_no='$contact'
		 	WHERE email='$email'");
 echo "<script>alert('Phone number has been changed.')</script>";
		 }


		  ?>
		</div>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
