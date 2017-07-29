<style>
	*{margin: 0px; padding: 0px;}
	table{border-collapse: collapse; margin-left: 20px}
	table tr td, table tr th{padding: 8px;}
	table tr th{background: #464646; color: #fff; text-decoration: underline;}
	.row0{background: #EBEBEB;}
	.row1{background: #FFFFFF}
</style>
<div style="background-image: url(img/back-ground-background-images-website-official.jpg); height: 638px">
<h1 style="margin-bottom: 50px; margin-left: 550px"><a href="Insert_Article.php">Add New Article</a></h1>
<?php
	$cn = mysqli_connect("localhost","root","","db_news_chenla_08_oop");
	if(mysqli_connect_errno() > 0){
		die("Can not connect to MySQL Server. MySQL said: " . mysqli_connect_error());
	}

	$sql = "SELECT article_id, cate_id, user_id, title, description, date_added, date_modified, is_publish, is_trash FROM tb_article";

	$result = mysqli_query($cn, $sql);
	if(mysqli_errno($cn) > 0){
		die("Execute SQL Statement failed. MySQL said: " . mysqli_error($cn));
	}
	echo "<table border='1px' cellpadding='5px'>";
		echo "<tr>";
			echo "<th>Article ID</th>";
			echo "<th>Category ID</th>";
			echo "<th>User ID</th>";
			echo "<th>Title</th>";
			echo "<th>Description</th>";
			echo "<th>Date Added</th>";
			echo "<th>Date Modified</th>";
			echo "<th>IS Publish</th>";
			echo "<th>IS Trash</th>";
			echo "<th>Edit</th>";
			echo "<th>Delete</th>";
		echo "</tr>";
	$k = 1;
	while($row = mysqli_fetch_assoc($result)){
		$id = $row["article_id"];
		$k = 1 - $k;
		echo "<tr class='row{$k}'>";
			echo "<td>" . $row["article_id"] . "</td>";
			echo "<td>" . $row["cate_id"] . "</td>";
			echo "<td>" . $row["user_id"] . "</td>";
			echo "<td>" . $row["title"] . "</td>";
			echo "<td>" . $row["description"] . "</td>";
			echo "<td>" . $row["date_added"] . "</td>";
			echo "<td>" . $row["date_modified"] . "</td>";
			echo "<td>" . $row["is_publish"] . "</td>";
			echo "<td>" . $row["is_trash"] . "</td>";
			echo "<td><a href='edit.php?id={$id}'>Edit</a></td>";
			echo "<td><a style='color:red' href='delete.php?id={$id}'>Delete</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_free_result($result);
	mysqli_close($cn);
?>
</div>