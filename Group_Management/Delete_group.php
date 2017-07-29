<?php
include("connection_to_database.php");
if(isset($_GET['delete'])){
	$id=$_GET['delete'];
	$sql="DELETE  FROM tb_group WHERE  group_id='$id'";
	$result=mysqli_query($con,$sql);
		header('location:Add_Group.php');
	//$rsul
	
}
?>