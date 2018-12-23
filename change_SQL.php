<?php
//get the post variables

//update the value
mysqli_query($conn,"UPDATE data SET cabinet_id='1'
WHERE id='1'");

mysqli_query($conn,"UPDATE data SET get_data='1'
WHERE id='1'");
header("location: profile.php");



//go back to the interface.php");



    ?>
