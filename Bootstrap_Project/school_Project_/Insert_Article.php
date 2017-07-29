<?php
if(isset($_POST["btn_submit"])){
	$cate_id = trim($_POST["cate_id"]);
	$user_id = trim($_POST["user_id"]);
	$title = trim($_POST["title"]);
	$description = trim($_POST["description"]);
	$date_added = trim($_POST["date_added"]);
	$date_modified = trim($_POST["date_modified"]);
	$is_publish = trim($_POST["is_publish"]);
	$is_trash = trim($_POST["is_trash"]);
	
	$cn = mysqli_connect("localhost","root","","db_news_chenla_08_oop");
	if(mysqli_connect_errno() > 0){
		die("Can not connect to MySQL Server. MySQL said: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO tb_article(cate_id, user_id, title, description, date_added, date_modified, is_publish, is_trash) 
		VALUES($cate_id, $user_id, '$title', '$description', '$date_added', '$date_modified', '$is_publish', '$is_trash')";

	$result = mysqli_query($cn, $sql);
	if(mysqli_errno($cn) > 0){
		die("Execute SQL Statement failed. MySQL said: " . mysqli_error($cn));
	}else{
		header("location:select.php");
		exit();
	}
}
?>
<style>
	*{margin: 0px; padding: 0px}
</style>
<div style="background: url(img/back-ground-background-images-website-official.jpg); height: 659px">
<h1 style="margin-left: 600px">Add New Article</h1>
<form action="" method="post">
	<table style="line-height: 40px; margin-left: 500px" cellpadding="10px">
		<td>
			<label for="cate_id"><b style="margin-right: 19px">Category ID: </b></label>
			<input type="number" style="line-height: 20px; width: 215px; margin-top: 40px" name="cate_id" id="cate_id"><br>
		
			<label for="user_id"><b style="margin-right: 50px">User ID: </b></label>
			<input type="number" style="line-height: 20px; width: 215px" name="user_id" id="user_id"><br>
		
			<label for="title"><b style="margin-right: 72px">Title: </b></label>
			<input type="text" size="26px" style="line-height: 20px" name="title" id="title"><br>
		
			<label for="description"><b>Description: </b></label><br>
			<textarea style="margin-left: 110px" name="description" rows="9" cols="28">		
			</textarea><br>
		
			<label for="date_added"><b style="margin-right: 16px">Date_Added: </b></label>
			<input type="datetime-local" name="date_added" id="date_added"><br>
		
			<label for="date_modified"><b>Date_Modified: </b></label>
			<input type="datetime-local" name="date_modified" id="date_modified"><br>
		
			<label for="is_publish"><b style="margin-right: 31px">Is_Publish: </b></label>
			<input type="text" style="line-height: 20px; width: 215px" name="is_publish" id="is_publish"><br>
		
			<label for="is_trash"><b style="margin-right: 43px">Is_Trash: </b></label>
			<input type="text" style="line-height: 20px; width: 215px" name="is_trash" id="is_trash"><br><br>
		
			<input style="color: #010073; font-size: 18px; font-family: Impact; width: 104px; height: 30px; margin-left: 114px" type="submit" name="btn_submit" value=" ADD ">
			<input type="reset" style="color: #010073; font-size: 18px; font-family: Impact; width: 104px; height: 30px;" name="clear" value="Clear"></td>
	</table>
	<a style="text-decoration: none" href="select.php"><b style="font-size: 20px; color: #5B0001; margin-left: 1290px">&larr;Back</b></a>
</form>
</div>