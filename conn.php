<?php
	$conn = mysqli_connect("localhost", "root", "", "randomsa");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>