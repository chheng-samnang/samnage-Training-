<?php
$con = mysqli_connect("localhost","root","","gsm");
	if(!$con){
		die("Connection error" . mysqli_connect_error($con));
	}
?>