<?php session_start(); ?>
<?php require_once 'config/db.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<style type="text/css">
hr {
  border-top: 2px solid #f8f8f8;
  border-bottom: 2px solid rgba(0,0,0,0.2);
}
</style>
</head>
<body>
    <div id="wrapper">
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

     <div class="page-banner" >
       <div class="container">
         <div class="row">
           <div class="col-md-6">
             <h2>Feedback</h2>
           </div>
          </div>
       </div>
     </div>

     <hr>

  <div class="container" style="background-color: #f2f2f2;box-shadow: 0 2px 3px rgba(0,0,0,0.15);border-radius: 5px;padding: 20px;">
  <form method="post">
  <div class="form-row align-items-center">
    <div class="form-group row">
      <label for="inputname" class="col-sm-2 col-form-label"> Name</label>
      <div class="col-sm-10">
      <input type="text"  class="form-control" id="inputname" name="name" placeholder="Name"></div>
    </div>

    <div class="form-group row">
      <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="inputemail" name="email" placeholder="Email"></div>
    </div>

    <div class="form-group row">
      <label for="inputsubject" class="col-sm-2 col-form-label">Subject</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="inputsubject" name="subject" placeholder="Subject"></div>
    </div>

    <div class="form-group row">
      <label for="inputfeedback" class="col-sm-2 col-form-label">Feedback</label>
      <div class="col-sm-10">
      <textarea  rows="6" class="form-control" id="inputfeedback" name="feedback" placeholder="Give your feedback"></textarea></div>
    </div>
  </div>
  <div class="form-group " >
  	<button type="submit" name="submit" class="btn btn-primary" >Post</button>
  </div>

  </form>


     </div>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
<?php
if (isset($_POST["submit"])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$feedback = $_POST["feedback"];
		  date_default_timezone_set("Asia/Dhaka");
			  $time=date("Y-m-d h:i:s");
//echo "$name <br> $email <br> $subject <br> $feedback <br>";
$sql_query =mysqli_query($conn,"INSERT INTO feedback (id, name, email, subject, feedback, timedate)
VALUES (NULL, '$name','$email','$subject','$feedback', '$time')");

				 echo "<script>alert('Thanks for giving feedback. We will get back to you soon.')</script>";

}
 ?>
