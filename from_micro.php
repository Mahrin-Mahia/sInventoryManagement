<?php session_start(); ?>

<?php
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");
require_once 'config/db.php';

$response = array();
date_default_timezone_set('Asia/Dhaka');
$t1 = date("gi");//many different possible formats, but this gives 12 hr format, and returns 1:23 as 123
$unit =$_GET ['unit'];
//http://ski499.phpnet.us/from_micro.php?unit=1&sensor=5kg&cab=1&com=5

//loop through and grab variables off the URL
// foreach($_GET as $key => $value)
// {
// if($key =="unit"){
// $unit = $value;
// }
//
// if($key =="sensor"){
// $sensor = $value;
// }
// }//for each


$result = mysqli_query($conn,"SELECT * FROM data");//table select

//loop through the table and filter out data for this unit id
while($pro = mysqli_fetch_array($result)) {
if($pro['id'] ==$unit){
  $d1 = $pro['cabinet_id'];
  $d2 = $pro['com_id'];
  $d3=$pro['get_data'];
  $d4=$pro['value'];
  $response["success"] = 1;

  $response["cabinet_id"] = $pro['cabinet_id'];
  $response["com_id"] = $pro['com_id'];
  $response["get_data"]=$pro['get_data'];
// Push all the items

  if($d3=='1'){

  echo json_encode($response);
}

//echo "_t1$t1##_d1$d1##_d2$d2##_d3$d3##";
}


}
$c1 =$_GET ['cab'];
$c2 =$_GET ['com']; //echo "$c1 $c2";
if($d1==$c1&&$d2==$c2){

$sensor =$_GET ['sensor']; //echo strcmp($d4,$sensor);

// echo "$sensor";


if(strcmp($d4,$sensor)==0){
  mysqli_query($conn,"UPDATE data SET get_data ='0'
  WHERE id=$unit");
//  echo "string";

}
else {
//update sensor value in database
mysqli_query($conn,"UPDATE data SET value ='$sensor'
WHERE id=$unit");
mysqli_query($conn,"UPDATE data SET get_data ='0'
WHERE id=$unit");

//if we need to get the time from the internet, use this.  This sets teh timezone

system('clear');
//pull out the table
$result = mysqli_query($conn,"SELECT * FROM data");//table select

//loop through the table and filter out data for this unit id
while($pro = mysqli_fetch_array($result)) {
if($pro['id'] ==$unit){
$d1 = $pro['cabinet_id'];
$d2 = $pro['com_id'];
$d3=$pro['get_data'];
$d4=$pro['value'];
$response["success"] = 1;
$response["cabinet_id"] = $pro['cabinet_id'];
$response["com_id"] = $pro['com_id'];
$response["get_data"]=$pro['get_data'];



// Push all the items

echo json_encode($response);
//echo "_t1$t1##_d1$d1##_d2$d2##_d3$d3##";

}



}
//while
mysqli_query($conn,"UPDATE cabinet SET quantity ='$d4'
WHERE com_id=$d2 and cabinet_id='$d1'");

}

}

?>
