<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM groceries WHERE name like '" . $_POST["keyword"] . "%' ORDER BY name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $key) {
?>
<li onClick="select('<?php echo $key["name"]; ?>');"><?php echo $key["name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>
<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword2"])) {
$query ="SELECT * FROM groceries WHERE name like '" . $_POST["keyword2"] . "%' ORDER BY name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $key2) {
?>
<li onClick="select2('<?php echo $key2["name"]; ?>');"><?php echo $key2["name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword3"])) {
$query ="SELECT * FROM groceries WHERE name like '" . $_POST["keyword3"] . "%' ORDER BY name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $key3) {
?>
<li onClick="select3('<?php echo $key3["name"]; ?>');"><?php echo $key3["name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword4"])) {
$query ="SELECT * FROM groceries WHERE name like '" . $_POST["keyword4"] . "%' ORDER BY name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $key4) {
?>
<li onClick="select4('<?php echo $key4["name"]; ?>');"><?php echo $key4["name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>


<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword5"])) {
$query ="SELECT * FROM groceries WHERE name like '" . $_POST["keyword5"] . "%' ORDER BY name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $key5) {
?>
<li onClick="select5('<?php echo $key5["name"]; ?>');"><?php echo $key5["name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword6"])) {
$query ="SELECT * FROM groceries WHERE name like '" . $_POST["keyword6"] . "%' ORDER BY name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $key6) {
?>
<li onClick="select6('<?php echo $key6["name"]; ?>');"><?php echo $key6["name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword7"])) {
$query ="SELECT * FROM groceries WHERE name like '" . $_POST["keyword7"] . "%' ORDER BY name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $key7) {
?>
<li onClick="select7('<?php echo $key7["name"]; ?>');"><?php echo $key7["name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword8"])) {
$query ="SELECT * FROM groceries WHERE name like '" . $_POST["keyword8"] . "%' ORDER BY name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $key8) {
?>
<li onClick="select8('<?php echo $key8["name"]; ?>');"><?php echo $key8["name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword9"])) {
$query ="SELECT * FROM groceries WHERE name like '" . $_POST["keyword9"] . "%' ORDER BY name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $key9) {
?>
<li onClick="select9('<?php echo $key9["name"]; ?>');"><?php echo $key9["name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>
