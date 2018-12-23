<!DOCTYPE html>
<?php
session_start();
require_once 'config/db.php';
require_once 'header/menu.php';

$email = $_SESSION['email'];


if (isset($_POST["inventory"])) {

   $inventory=$_POST["inventory"];
   $sql_query =mysqli_query($conn,"INSERT INTO cabinetlist (id, email, cabinet_id)
VALUES (NULL, '$email', '$inventory')");

for($x = 1; $x <= 9; $x++)
{
   $sql =mysqli_query($conn,"INSERT INTO cabinet (id, cabinet_id, com_id, com_name,quantity)
VALUES (NULL, '$inventory', '$x', 'compartment','')");

}
echo '<script type="text/javascript">';


echo"window.location.href = 'profile.php'";
echo"</script>";
}



 ?>
<html lang="en" dir="ltr">
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="css/settingsstyle.css">
    <meta charset="utf-8">
    <title>Add Inventory</title>
  </head>
  <body>
     <div class="container" style="background-color: #f2f2f2;box-shadow: 0 2px 3px rgba(0,0,0,0.15);border-radius: 5px;padding: 20px;">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div class="form-group">
       <label form="inventory">Inventory ID</label>
       <input type="inventory" name="inventory" class="form-control" id="inventory" aria-describedby="emailHelp" placeholder="inventory id here">

     </div>


     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
 </div>

   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
