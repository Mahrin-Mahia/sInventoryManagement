<?php session_start(); ?>
<?php $page = $_SERVER['PHP_SELF'];
 $sec = "10";
 header("Refresh: $sec; url=$page"); ?>
<?php require_once 'config/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <title>Home|Inventories</title>
  <link rel="stylesheet" href="css/profilestyle.css">
</head>
<body>
  <?php
  $email = $_SESSION['email'];
  ?>
<div class="wrapper">
  <?php require_once 'header/menu.php'; ?>

  <div class="page-banner" >
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Your Inventories</h3>
          <p>You can monitor your updater groceries from here</p>
        </div>

        <div class="col-md-6">
          <ul class="breadcrumb">
            <div class="dropdown">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="glyphicon glyphicon-pencil"></span>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php
    $cabinetIdEdit=mysqli_query($conn, "SELECT cabinet_id from cabinetlist cl where cl.email='$email'");
    foreach ($cabinetIdEdit as $key ) {
      # code...
      echo"<li>";
        echo"<a class='dropdown-item' href='editcabinetname.php?edit=".$key['cabinet_id']."'>Cabinet " .$key['cabinet_id']."</a>";
        echo"</li>";
    }

?>
  </div>
</div>
          </ul>
        </div>
      </div>
    </div>
  </div>

    <hr>





        <?php
        $sql=mysqli_query($conn, "SELECT cabinet_id from cabinetlist cl where cl.email='$email'");
        $value['quantity']="";
        foreach ($sql as $key) {
        echo "<div class='container'>";


          echo "<div class='row'>";
          echo "<h3>Cabinet ";
          echo $key['cabinet_id'];
          echo "</h3>";
          $cabinetid=$key['cabinet_id'];
          $sql1 = mysqli_query($conn, "SELECT * FROM cabinet c where cabinet_id='$cabinetid'");
          foreach ($sql1 as $value) {
            # code...

        echo "<a class='paging_box'>";
        echo  "<div class='col-lg-4 col-md-4 col-sm-6 grid' style='margin-bottom: 20px;'>";
        echo    "<div class='compartment' id='1'>";
        echo $value['com_name'];
        $picture=$value['com_name'];
        $id=$value['com_id'];
        $sql80 = mysqli_query($conn, "SELECT grocery_image FROM groceries_image where grocery_name='$picture'");
        $pro=mysqli_fetch_assoc($sql80);
          $total=$pro['grocery_image'];
        echo"<br>";
        echo "</h4><img src='image/$total'><p class='ptitle' style='min-height: 25px;'> Amount:";


        echo $value['quantity'];

        echo"<br>  <a href='cart.php?cart_quantity=".$value['quantity']."&cart_name=".$value['com_name']."' class='btn btn-info' role='button' style='margin-right:2px'>Place Order</a>";
       echo "<a href='refresh.php?quantity=".$value['quantity']."&com_id=".$value['com_id']."&cabinet_id=".$value['cabinet_id']."' class='btn btn-info' role='button'>Refresh</a>";

          //  echo"<button type='submit' class='btn btn-info' name='sub1' value='Refresh'>Refresh</button>";



          echo  "</div>";
          echo"</div>";
         echo"</a>";



       }
        }
?>


</div>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
