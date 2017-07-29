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
	$con=mysqli_connect("localhost","root","","rsm");
	if(!$con){
		die("Connection Error". mysqli_error());
	}
if(isset($_POST['btnSubmit'])){
	$username=$_POST['txtUserName'];
	$sql="SELECT UserName FROM tblAccount WHERE UserName='$username'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
		echo "Dublicate User";
	}else{
		echo "";
	}
}

?>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12"><h1 align="center">Reset Password</h1></div>
	</div>
	
		<form action="resetUserName_Password.php" method="post">
			<div class="form-group">
				<label for="txtUserName">Email ro Phone number</label><br>
				<input class="form-control input-sm" type="text" name="txtUserName" placeholder="Input you Email or phone number"><br>
				<label for="txtPassword">New Password:</label><br>
				<input class="form-control input-sm" type="password"  name="txtPassword" placeholder="Input new password"><br>
				<label for="txtConfirmPass"> Confirm Password:</label><br>
				<input class="form-control input-sm" type="password"  name="txtConfirmPass" placeholder="Input new password again"><br>

				<input class="btn btn-primary" type="submit" name="btnSubmit" value="Update">
			</div>
		</form>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
</html>