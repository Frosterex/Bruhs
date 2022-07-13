<?php
	$cnn = mysqli_connect("localhost","root","StudentA","dbcourse");
	if (!$cnn){
		die("Error connecting to database: " . mysqli_connect_error());
	}
?>