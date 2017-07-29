
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
<?php
	include 'Connection_to_database.php';
	//study even click on button submit
	//query datat to form
	$sql="SELECT * FROM tblaccount";
	$result=mysqli_query($con,$sql) or die("Fail");
	$row=mysqli_fetch_assoc($result);
	if(isset($_GET['Update'])){
	$id=$_GET['Update'];
	$name=$_POST['txtUserName'];
	$add=$_POST['txtAddress'];
	$number=$_POST['txtPhone'];
	$email=$_POST['txtEmail'];
	$pass=md5(trim($_POST['txtPass']));
	$sql="UPDATE tblaccount SET UserName='$name',Address='$add',phoneNumber='$number',Email='$email',password='$pass' WHERE ID='$id'";
	$result=mysqli_query($con,$sql);
		header('location:Display.php');
?>
<body>
<div class="container">
	<form action="Update.php" method="post" style="width: 50%; align-content: center;">
		<div class="form-group">
			<label for="txtUserName">User Name</label>
			<input class="form-control input-sm" type="text" name="txtUserName" value="<?php $row['UserName']; ?>">
			<label for="txtAddress">Address</label>
			<input class="form-control input-sm" type="text" name="txtAddress" value="<?php $row['Address']; ?>">
			<label for="txtPhone">Phone Number</label>
			<input class="form-control input-sm" type="text" name="txtPhone" value="<?php $row['phoneNumber']; ?>">
			<label for="txtEmail">Email</label>
			<input class="form-control input-sm" type="text" name="txtEmail" value="<?php $row['Email']; ?>">
			<label for="txtPass">Password</label>
			<input class="form-control input-sm" type="password" name="txtPass" value="<?php $row['password']; ?>">
			<button class="btn btn-primary" name="btnSubmit">Add</button>
		</div>
	</form>
</div>
</body>
<html
