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
	$con=mysqli_connect("localhost","root","","gsm");
	if(!$con){
		die("Connectio faild!".mysqli_connect_error());
	}
	else{
		if(isset($_POST['btnSubmit'])){
			
		$group_name=$_POST['txtGroup_title'];
		$dsc=trim($_POST['txtDescription']);
		
		//$sql="INSERT INTO group (group_name,Description) VALUES ('$group_name','$dsc')";
		$sql = "INSERT INTO tb_group (group_name, Description) VALUES ('$group_name', '$dsc')";
		$result = mysqli_query($con, $sql);
		if(mysqli_errno($con) > 0){
			  echo "Error: " . $sql . "<br>" . mysqli_error($con);
		}else{
			echo "Data have beeb inserted...";
		}
		
	}
	
	}
?>
<body>
	<div class="container">
		<form action="Add_Group.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label for="txtGroup_title">Group Name:</label>
				<input type="text" name="txtGroup_title" class="form-control">
				<label for="txtDescription">Description:</label>
				<textarea name="txtDescription" rows="10" cols="30" class="form-control">		
				</textarea><br>
				<input type="submit" name="btnSubmit" value="Save" class="btn btn-primary">
			</div>
		</form><hr>
		<p>Lists Group</p>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Group Name</th>
						<th>Descript</th>
						<th>Add Member To Group</th>
						<th>Show Member</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<?php
				$sql="SELECT * FROM tb_group";
				$result=mysqli_query($con,$sql) or die("Fail");
				while($row=mysqli_fetch_assoc($result)){
					echo "<tr>
							<td>{$row['group_id']}</td>
							<td>{$row['group_name']}</td><td>{$row['Description']}</td>
							<td><a href='Add_member_to_group.php?ad_member={$row['group_id']}'>Add Member</a></td>
							<td><a href='show_Member_ingroup.php?show_member={$row['group_id']}'>Show Member</a></td>
							<td><a href='Update_group.php?update_group={$row['group_id']}'>Update</a></td>
							<td><a href='Delete_group.php?delete={$row['group_id']}'>Delete</a></td>
						</tr>";
				}
			?>
				</tbody>
			</table>
		</div>
	</div>
</body>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/js/bootstrap.min.js"></script>
</html>