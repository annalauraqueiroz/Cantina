<?php
	$con = mysqli_connect("localhost","root","","Cantina");

	if ($con) {
		mysqli_close($con);
	}	
?>