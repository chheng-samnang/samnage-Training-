<?php
function connect_db()
{
	$con = mysqli_connect("localhost","root","123456","category_management");
	return $con;
 	if(!$con){
 		die("Connection error" . mysqli_connect_error($con));
 	}
}

	function loadData()
	{
		 $con = connect_db();
		 $sql = "SELECT * FROM tbl_category";
		 $query = mysqli_query($con,$sql);
		 return $query;
	}

	function insertCat($post)
	{
		$con = connect_db();
		$cat_name = $post['txtCatName'];
		$cat_code = $post['txtCatCode'];
		$cat_desc = $post['txtCatDesc'];
		$sql = "INSERT INTO tbl_category VALUE(NULL,'$cat_name','$cat_code','$cat_desc','Admin','".date('Y-m-d')."')";
		$result = mysqli_query($con,$sql);
		return $result;
	}
?>
