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

if(isset($_GET["update_group"])){
	$id=$_GET['update_group'];
		
	$sql = "SELECT * FROM tb_group WHERE group_id=$id LIMIT 1";
		
	$result = mysqli_query($con, $sql);
	if(mysqli_errno($con) > 0){
		die("Execute SQL statement failed " . mysqli_error($con));
	}
	$row=mysqli_fetch_assoc($result);
	$gName=$row["group_name"];
	$gdsc=$row["Description"];	
	}

	if(isset($_POST["btn_Update"])){
		$id=$_GET['update_group'];
		//$cat_id=trim($_POST["txt_cat_id"]);
		$gname=trim($_POST["txtg_name"]);
		$dsc=trim($_POST["txtDescription"]);
		//sql statement update
		$sql = "UPDATE tb_group SET 
				group_name='$gname',Description='$dsc' WHERE group_id=$id";
		
		$result = mysqli_query($con, $sql);
		if(mysqli_errno($con) > 0){
			die("Execute SQL statement failed fdafda " . mysqli_error($con));
		}else{
			header("Location: Add_Group.php");
		exit;	
	}
	
	exit();
}

?>

<body>
<div class="container">
  <h2>Update Group</h2>
  <form class="form-horizontal" action="" method="post">
    <div class="form-group">
      	<label class="control-label" for="txtg_name">Group Name:</label> 
      	        
        <input type="text" class="form-control" name="txtg_name" value="<?php echo $gName; ?>">
        
      	<label class="control-label" for="txtDescription">Description:</label>
      	
        <textarea name="txtDescription" rows="10" cols="30" class="form-control"><?php echo $gdsc; ?></textarea><br>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="btn_Update" value="Update">
    </div>
  </form>
</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
</html>