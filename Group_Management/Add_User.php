<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap-theme.css" rel="stylesheet">
    <link href="asset/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<?php
	include("connection_to_database.php");
	if(isset($_POST['btnAdd'])){
		$name=$_POST['txtUserName'];
		$gender=$_POST['txtGender'];
		$address=$_POST['txtAddress'];
		$email=$_POST['txtEmail'];
		$phone=$_POST['txtPhone'];
		$pass=$_POST['txtPassword'];
		$sql="INSERT INTO tb_user (Use_Name,gender,address,email,phone,password) VALUES ('$name','$gender','$address','$email','$phone','$pass')";
		$result = mysqli_query($con, $sql);
		
		if(mysqli_errno($con) > 0){
			  echo "Error: " . mysqli_error($con);
		}else{
			echo "Data have beeb inserted...";
		}
	}
?>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12 "><h1 align="center"> Add User</h1></div>
	</div>
	<form class="form-horizontal" action="Add_User.php" method="post">
		<div class="form-group" >
			<label for="txtUserName">User Name</label>
			<input type="text" name="txtUserName" class="form-control">
			<label for="txtGender">Gender</label>
			<input type="text" name="txtGender" class="form-control">
			<label for="txtAddress">Address</label>
			<input type="text" name="txtAddress" class="form-control">
			<label for="txtEmail">Email</label>
			<input type="text" name="txtEmail" class="form-control">
			<label for="txtPhone">Phone</label>
			<input type="text" name="txtPhone" class="form-control">
			<label for="txtPassword">Password</label>
			<input type="text" name="txtPassword" class="form-control"> <br>
			<input type="submit" name="btnAdd" class="btn btn-primary" value="Add User" >
		</div>
	</form>
</div>
</body>
<script src="asset/js/bootstrap.min.js"></script>
</html>