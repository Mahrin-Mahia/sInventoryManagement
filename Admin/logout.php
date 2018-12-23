<?php
	session_start();
	session_destroy();

	echo "<script>window.open('adminindex.php','_self')</script>";

?>
