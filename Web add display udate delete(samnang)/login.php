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
		$username= $_POST['txtUserName'];
		$pass=md5(trim($_POST['txtPassword']));
		//discrip password test
		//t$hash rue
			$sql= "SELECT UserName,password FROM tblaccount where UserName='$username' and password='$pass'";
			
			$query=mysqli_query($con,$sql);
			if(mysqli_num_rows($query)>0){
				//$row=mysqli_num_rows($query);
				echo "Welcome :".$username;

			}else{
					echo "Incorect username and password";
			}
		
	}
?>
	<body>
		<div class="container">
			<div class="row">
		<div class="col-md-12"><h1 align="center">Reset Password</h1></div>
	</div>
			<form action="login.php" method="post">
				<div class="form-group">
					<label for="txtUserName">User Name</label><br>
					<input class="form-control input-sm" type="text" name="txtUserName"><br>
					<label  for="txtpassName">Password</label> <br>
					<input class="form-control input-sm" type="password" name="txtPassword"><br>
					<input class="btn btn-primary" type="submit" name="btnSubmit" value="Log in">
					<a href="resetPassword.php">Forgot passpassword</a></p>
				</div>
			</form>
		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
</html>