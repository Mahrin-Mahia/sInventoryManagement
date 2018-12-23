<?php session_start(); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Cabinet Name</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/settingsstyle.css">
<style media="screen">
#country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:400px;position: absolute;}
#country-list li{padding: 10px; background: #f0f0f0; border-bottom: #bbb9b9 1px solid;}
#country-list li:hover{background:#ece3d2;cursor: pointer;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF ");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}

		});
	});
});

function select(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();

}
</script>

<script>
$(document).ready(function(){
	$("#search-box2").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword2='+$(this).val(),
		beforeSend: function(){
			$("#search-box2").css("background","#FFF ");
		},
		success: function(data){
			$("#suggesstion-box2").show();
			$("#suggesstion-box2").html(data);
			$("#search-box2").css("background","#FFF");
		}

		});
	});
});

function select2(val) {
$("#search-box2").val(val);
$("#suggesstion-box2").hide();

}
</script>

<script>
$(document).ready(function(){
	$("#search-box3").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword3='+$(this).val(),
		beforeSend: function(){
			$("#search-box3").css("background","#FFF ");
		},
		success: function(data){
			$("#suggesstion-box3").show();
			$("#suggesstion-box3").html(data);
			$("#search-box3").css("background","#FFF");
		}

		});
	});
});

function select3(val) {
$("#search-box3").val(val);
$("#suggesstion-box3").hide();

}
</script>

<script>
$(document).ready(function(){
	$("#search-box4").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword4='+$(this).val(),
		beforeSend: function(){
			$("#search-box4").css("background","#FFF ");
		},
		success: function(data){
			$("#suggesstion-box4").show();
			$("#suggesstion-box4").html(data);
			$("#search-box4").css("background","#FFF");
		}

		});
	});
});

function select4(val) {
$("#search-box4").val(val);
$("#suggesstion-box4").hide();

}
</script>

<script>
$(document).ready(function(){
	$("#search-box5").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword5='+$(this).val(),
		beforeSend: function(){
			$("#search-box5").css("background","#FFF ");
		},
		success: function(data){
			$("#suggesstion-box5").show();
			$("#suggesstion-box5").html(data);
			$("#search-box5").css("background","#FFF");
		}

		});
	});
});

function select5(val) {
$("#search-box5").val(val);
$("#suggesstion-box5").hide();

}
</script>

<script>
$(document).ready(function(){
	$("#search-box6").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword6='+$(this).val(),
		beforeSend: function(){
			$("#search-box6").css("background","#FFF ");
		},
		success: function(data){
			$("#suggesstion-box6").show();
			$("#suggesstion-box6").html(data);
			$("#search-box6").css("background","#FFF");
		}

		});
	});
});

function select6(val) {
$("#search-box6").val(val);
$("#suggesstion-box6").hide();

}
</script>

<script>
$(document).ready(function(){
	$("#search-box7").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword7='+$(this).val(),
		beforeSend: function(){
			$("#search-box7").css("background","#FFF ");
		},
		success: function(data){
			$("#suggesstion-box7").show();
			$("#suggesstion-box7").html(data);
			$("#search-box7").css("background","#FFF");
		}

		});
	});
});

function select7(val) {
$("#search-box7").val(val);
$("#suggesstion-box7").hide();

}
</script>

<script>
$(document).ready(function(){
	$("#search-box8").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword8='+$(this).val(),
		beforeSend: function(){
			$("#search-box8").css("background","#FFF ");
		},
		success: function(data){
			$("#suggesstion-box8").show();
			$("#suggesstion-box8").html(data);
			$("#search-box8").css("background","#FFF");
		}

		});
	});
});

function select8(val) {
$("#search-box8").val(val);
$("#suggesstion-box8").hide();

}
</script>

<script>
$(document).ready(function(){
	$("#search-box9").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readCountry.php",
		data:'keyword9='+$(this).val(),
		beforeSend: function(){
			$("#search-box9").css("background","#FFF ");
		},
		success: function(data){
			$("#suggesstion-box9").show();
			$("#suggesstion-box9").html(data);
			$("#search-box9").css("background","#FFF");
		}

		});
	});
});

function select9(val) {
$("#search-box9").val(val);
$("#suggesstion-box9").hide();

}
</script>

</head>
<body>
	<?php
  $email = $_SESSION['email'];
	$cabinetid=$_GET['edit'];

  ?>
    <div id="wrapper">
      <?php require_once 'header/menu.php' ?>


     <div class="page-banner" >
       <div class="container">
         <div class="row">
           <div class="col-md-6">
             <h2>Edit Cabinet Name</h2>
           </div>
          </div>
       </div>
     </div>

     <hr>
		 <div class="container" style="background-color: #f2f2f2;box-shadow: 0 2px 3px rgba(0,0,0,0.15);border-radius: 5px;padding: 20px;">
			 <form method="post">
  <div class="form-row align-items-center">
    <div class="form-group">
			<label class=""  for="inputfname">Compartment 1</label>

			<input type="text" class="form-control" id="search-box" name="search-box" placeholder="Change name" required>
			<div id="suggesstion-box"></div>
    </div>
  </div>
  <div class="form-group">
  	<button type="submit" name="sub1" class="btn btn-success" action="" >Submit</button>
  </div>
  </form>
		 <?php
		 if (isset($_POST['sub1'])) {
		 $email = $_SESSION['email'];
		 $name = $_POST["search-box"];
		 	mysqli_query($conn,"UPDATE cabinet  SET com_name='$name'
	WHERE cabinet_id='$cabinetid' AND com_id='1'");
			// echo "<script>alert('Name has been changed.')</script>";
			echo '<script type="text/javascript">';


	echo"window.location.href = 'profile.php'";
	echo"</script>";
		 }
		  ?>


			<form method="post">
			<div class="form-row align-items-center">
			<div class="form-group">
			<label class=""  for="inputfname">Compartment 2</label>
			<input type="text" class="form-control" id="search-box2" name="search-box2" placeholder="Change name" required>
			<div id="suggesstion-box2"></div>
			</div>
			</div>
			<div class="form-group">
			<button type="submit" name="sub2" class="btn btn-success" action="" >Submit</button>
			</div>
			</form>

			<?php
			if (isset($_POST['sub2'])) {
			$email = $_SESSION['email'];
			$name = $_POST["search-box2"];
			mysqli_query($conn,"UPDATE cabinet  SET com_name='$name'
	WHERE cabinet_id='$cabinetid' AND com_id='2'");
	// echo "<script>alert('Name has been changed.')</script>";
	echo '<script type="text/javascript">';


echo"window.location.href = 'profile.php'";
echo"</script>";
			}
			?>

			<form method="post">
			<div class="form-row align-items-center">
			<div class="form-group">
			<label class=""  for="inputfname">Compartment 3</label>
			<input type="text" class="form-control" id="search-box3" name="search-box3" placeholder="Change name" required>
			<div id="suggesstion-box3"></div>
			</div>
			</div>
			<div class="form-group">
			<button type="submit" name="sub3" class="btn btn-success" action="" >Submit</button>
			</div>
			</form>

			<?php
			if (isset($_POST['sub3'])) {
			$email = $_SESSION['email'];
			$name = $_POST["search-box3"];
			mysqli_query($conn,"UPDATE cabinet  SET com_name='$name'
	WHERE cabinet_id='$cabinetid' AND com_id='3'");
	// echo "<script>alert('Name has been changed.')</script>";
	echo '<script type="text/javascript">';


echo"window.location.href = 'profile.php'";
echo"</script>";
			}
			?>

			<form method="post">
			<div class="form-row align-items-center">
			<div class="form-group">
			<label class=""  for="inputfname">Compartment 4</label>
			<input type="text" class="form-control" id="search-box4" name="search-box4" placeholder="Change name" required>
			<div id="suggesstion-box4"></div>
			</div>
			</div>
			<div class="form-group">
			<button type="submit" name="sub4" class="btn btn-success" action="" >Submit</button>
			</div>
			</form>

			<?php
			if (isset($_POST['sub4'])) {
			$email = $_SESSION['email'];
			$name = $_POST["search-box4"];
			mysqli_query($conn,"UPDATE cabinet  SET com_name='$name'
	WHERE cabinet_id='$cabinetid' AND com_id='4'");
	// echo "<script>alert('Name has been changed.')</script>";
	echo '<script type="text/javascript">';


echo"window.location.href = 'profile.php'";
echo"</script>";
			}
			?>

			<form method="post">
			<div class="form-row align-items-center">
			<div class="form-group">
			<label class=""  for="inputfname">Compartment 5</label>
			<input type="text" class="form-control" id="search-box5" name="search-box5" placeholder="Change name" required>
			<div id="suggesstion-box5"></div>
			</div>
			</div>
			<div class="form-group">
			<button type="submit" name="sub5" class="btn btn-success" action="" >Submit</button>
			</div>
			</form>

			<?php
			if (isset($_POST['sub5'])) {
			$email = $_SESSION['email'];
			$name = $_POST["search-box5"];
			mysqli_query($conn,"UPDATE cabinet  SET com_name='$name'
	WHERE cabinet_id='$cabinetid' AND com_id='5'");
	// echo "<script>alert('Name has been changed.')</script>";
	echo '<script type="text/javascript">';


echo"window.location.href = 'profile.php'";
echo"</script>";
			}
			?>

			<form method="post">
			<div class="form-row align-items-center">
			<div class="form-group">
			<label class=""  for="inputfname">Compartment 6</label>
			<input type="text" class="form-control" id="search-box6" name="search-box6" placeholder="Change name" required>
			<div id="suggesstion-box6"></div>
			</div>
			</div>
			<div class="form-group">
			<button type="submit" name="sub6" class="btn btn-success" action="" >Submit</button>
			</div>
			</form>

			<?php
			if (isset($_POST['sub6'])) {
			$email = $_SESSION['email'];
			$name = $_POST["search-box6"];
			mysqli_query($conn,"UPDATE cabinet  SET com_name='$name'
	WHERE cabinet_id='$cabinetid' AND com_id='6'");
	// echo "<script>alert('Name has been changed.')</script>";
	echo '<script type="text/javascript">';


echo"window.location.href = 'profile.php'";
echo"</script>";
			}
			?>

			<form method="post">
			<div class="form-row align-items-center">
			<div class="form-group">
			<label class=""  for="inputfname">Compartment 7</label>
			<input type="text" class="form-control" id="search-box7" name="search-box7" placeholder="Change name" required>
			<div id="suggesstion-box7"></div>
			</div>
			</div>
			<div class="form-group">
			<button type="submit" name="sub7" class="btn btn-success" action="" >Submit</button>
			</div>
			</form>

			<?php
			if (isset($_POST['sub7'])) {
			$email = $_SESSION['email'];
			$name = $_POST["search-box7"];
			mysqli_query($conn,"UPDATE cabinet  SET com_name='$name'
	WHERE cabinet_id='$cabinetid' AND com_id='7'");
	// echo "<script>alert('Name has been changed.')</script>";
	echo '<script type="text/javascript">';


echo"window.location.href = 'profile.php'";
echo"</script>";
			}
			?>

			<form method="post">
			<div class="form-row align-items-center">
			<div class="form-group">
			<label class=""  for="inputfname">Compartment 8</label>
			<input type="text" class="form-control" id="search-box8" name="search-box8" placeholder="Change name" required>
			<div id="suggesstion-box8"></div>
			</div>
			</div>
			<div class="form-group">
			<button type="submit" name="sub8" class="btn btn-success" action="" >Submit</button>
			</div>
			</form>

			<?php
			if (isset($_POST['sub8'])) {
			$email = $_SESSION['email'];
			$name = $_POST["search-box8"];
			mysqli_query($conn,"UPDATE cabinet  SET com_name='$name'
	WHERE cabinet_id='$cabinetid' AND com_id='8'");
	// echo "<script>alert('Name has been changed.')</script>";
	echo '<script type="text/javascript">';


echo"window.location.href = 'profile.php'";
echo"</script>";
			}
			?>

			<form method="post">
			<div class="form-row align-items-center">
			<div class="form-group">
			<label class=""  for="inputfname">Compartment 9</label>
			<input type="text" class="form-control" id="search-box9" name="search-box9" placeholder="Change name" required>
			<div id="suggesstion-box9"></div>
			</div>
			</div>
			<div class="form-group">
			<button type="submit" name="sub9" class="btn btn-success" action="" >Submit</button>
			</div>
			</form>

			<?php
			if (isset($_POST['sub9'])) {
			$email = $_SESSION['email'];
			$name = $_POST["search-box9"];
			mysqli_query($conn,"UPDATE cabinet  SET com_name='$name'
	WHERE cabinet_id='$cabinetid' AND com_id='9'");
	// echo "<script>alert('Name has been changed.')</script>";
	echo '<script type="text/javascript">';


echo"window.location.href = 'profile.php'";
echo"</script>";
			}
			?>






		</div>

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
