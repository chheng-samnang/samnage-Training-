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
    <link href="asset/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap-theme.css" rel="stylesheet">
</head>
<?php
	include 'Connection_to_database.php';
	//study even click on button submit
	if(isset($_POST['btnSubmit'])){
		$name=$_POST['txtUserName'];
		$add=$_POST['txtAddress'];
		$number=$_POST['txtPhone'];
		$email=$_POST['txtEmail'];
		$pass=md5(trim($_POST['txtPass']));
		
		$sql="SELECT UserName FROM tblAccount WHERE UserName='$name'";
		$result=mysqli_query($con,$sql);
		
		if(mysqli_num_rows($result)>0){
		echo "Dublicate User";
		}else{
			$sql="INSERT INTO tblaccount(UserName,Address,phoneNumber,Email,password) VALUES('$name','$add','$number','$email','$pass')";
			$result=mysqli_query($con,$sql);
			//var_dump($result); 
			if(mysqli_errno($con)){
				die("Error! Connection...");
			}else{
				header("location:Display.php");
			}
		}
	} 
?>
<body>
<div class="container">
	<form action="Add_User_account.php" method="post" style="width: 50%; align-content: center;">
		<div class="form-group">
			<label for="txtUserName">User Name</label>
			<input class="form-control input-sm" type="text" name="txtUserName">
			<label for="txtAddress">Address</label>
			<input class="form-control input-sm" type="text" name="txtAddress">
			<label for="txtPhone">Phone Number</label>
			<input class="form-control input-sm" type="text" name="txtPhone">
			<label for="txtEmail">Email</label>
			<input class="form-control input-sm" type="text" name="txtEmail">
			<label for="txtPass">Password</label>
			<input class="form-control input-sm" type="password" name="txtPass">
			<button class="btn btn-primary" name="btnSubmit">Add</button>
		</div>
	</form>
</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
</html>