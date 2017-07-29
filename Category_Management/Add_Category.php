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
		$cat_name=$_POST['txtname'];
		$parent_id=$_POST['txtparent_id'];
		$level=$_POST['txtlevel'];
		$date=$_POST['txtDate'];
		
		$sql="INSERT INTO tb_category (cate_name, descrioption) VALUES('$cate_name',)";
		$result=mysqli_query($con, $sql);
		
		if(mysqli_errno($con) > 0){
			die("Execute SQL statement failed. MySQL said: " . mysqli_error($con));
		}else{
			header("location:Display_category.php");	
		}
	}
?>
<body>
<div class="container">
  <h2>Add Category</h2>
  <form class="form-horizontal" action="Form_category.php" method="post">
    <div class="form-group">
      	<label class="control-label" for="txtname">Category Name:</label>     
        <input type="text" class="form-control" name="txtname">
       
      	<label class="control-label" for="txtDecription">Description:</label>
      	<textarea name="txtDescription" rows="10" cols="30" class="form-control"></textarea><br>
        <input type="date" class="form-control" name="txtDate">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="btnAdd" value="Add Category">
    </div>
  </form>
</div>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
</html>