<?php 
	$cnn=mysqli_connect("localhost", "HOWEL", "123456", "dbcourse");
	if(!$cnn){
		die("Error connecting to data:".mysqli_connect_error($cnn));
	}
?>