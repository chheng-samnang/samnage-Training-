<?php
$con = mysqli_connect("localhost","root","","category_management");
	if(!$con){
		die("Connection error" . mysqli_connect_error($con));
	}
?>