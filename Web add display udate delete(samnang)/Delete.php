<?php
include 'Connection_to_database.php';

if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$sql="DELETE  FROM tblaccount WHERE  ID='$id'";
	$result=mysqli_query($con,$sql);
		header('location:Display.php');
	//$rsul
	
}
?>

