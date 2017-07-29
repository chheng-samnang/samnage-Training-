
<?php
	include("connection_to_database.php");
		if(isset($_POST["btn_add_member"])){
			$id=$_GET['ad_member'];
	
			//$cat_id=trim($_POST["txt_cat_id"]);
			$username=$_POST['selectUser'];
			//sql statement update
			//$sql = "INSERT INTO store_g_and_user (g_id,username) VALUES ($id,'$username')";
			$sql = "SELECT * FROM store_g_and_user WHERE  username='$username' AND g_id=$id";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0){
				echo "Can not add this user because already added!";
			}else{  
			$sql="INSERT INTO store_g_and_user(g_id,username) VALUES($id,'$username')";
			
			$result = mysqli_query($con, $sql);
			if(mysqli_errno($con) > 0){
				die("Execute SQL statement failed " . mysqli_error($con));
			}else{
				header("Location: Add_Group.php");	
			}
			exit();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Group Management</title>

    <!-- Bootstrap -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/bootstrap-theme.css" rel="stylesheet">
    <link href="asset/css/bootstrap-theme.min.css" rel="stylesheet">
    <style>
		a {
			color: white!important;
			text-decoration: none!important;
		}
	</style>
</head>
<body>
	

	<div class="container"><br>
	<div class="row">
		<div class="col-md-2" style="background-color: dimgray!important;"></div>
		<div class="col-md-10"></div>
	</div>
		
		<form action="" class="form-horizontal" method="post">
		
			<label>Select User Name:</label>
			<select name="selectUser" class="form-control" >
				<?php
					
					$sql="SELECT * FROM tb_user";
					$result=mysqli_query($con,$sql);
					while($row=mysqli_fetch_assoc($result))
					{ ?>
					<option><?php echo $row['Use_Name'];?></option>
					<?php 
					}
					?>
			</select><br>
			<input type="submit" class="btn btn-primary" name="btn_add_member" value="Add to group">
			<button class="btn btn-primary"><a href="http://localhost:8080/PHP/samnage(Training)/Group_Management/Add_Group.php">
			Go to Group management</a></button>
		</form>
	</div>
</body>
<script src="asset/js/bootstrap.min.js"></script>
</html>