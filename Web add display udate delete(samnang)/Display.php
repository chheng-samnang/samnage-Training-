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
	$con=mysqli_connect("localhost","root","","rsm");
	if(!$con){
		die("Connection Error". mysqli_errno());
	}
?>
</head>
<body>
<div class="container">
 <div class="row">
 	<div class="col-md-12" align="center"><h1>List all User</h1></div>
 </div>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>User Name</th>
					<th>Address</th>
					<th>Phone Number</th>
					<th>Email</th>
					<th>pasword</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$sql="SELECT * FROM tblaccount";
				$result=mysqli_query($con,$sql) or die("Fail");
				while($row=mysqli_fetch_assoc($result)){
				echo "<tr><td>{$row['ID']}</td><td>{$row['UserName']}</td><td>{$row['Address']}</td><td>{$row['phoneNumber']}</td><td>		{$row['Email']}</td><td>{$row['password']}</td><td><a href='Delete.php?delete={$row['ID']}'>Delete</a></td><td><a 		href='Update.php?Update={$row['ID']}'>Edit</a></td></tr>";
				}
			?>
			</tbody>
		</table>
	</div>
	<button class="btn btn-default"><a href="Add_User_account.php">Add New</a></button>
</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
</html>