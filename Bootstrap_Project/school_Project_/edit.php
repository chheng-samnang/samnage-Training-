<?php
$cn = mysqli_connect("localhost","root","","db_news_chenla_08_oop");
if(mysqli_connect_errno() > 0){
	die("Can not connect to MySQL Server. MySQL said: " . mysqli_connect_error());
}
if(isset($_GET["id"])){
	$id = (int)$_GET["id"];
	$sql = "SELECT cate_id, user_id, title, description, date_added, date_modified, is_publish, is_trash FROM tb_article WHERE article_id=$id LIMIT 1";
	$result = mysqli_query($cn, $sql);
	if(mysqli_errno($cn) > 0){
		die("Execute SQL Statement failed. MySQL said: " . mysqli_error($cn));
	}
	$row = mysqli_fetch_assoc($result);
	$cate_id = $row["cate_id"];
	$user_id = $row["user_id"];
	$title = $row["title"];
	$description = $row["description"];
	$date_added = $row["date_added"];
	$date_modified = $row["date_modified"];
	$is_publish = $row["is_publish"];
	$is_trash = $row["is_trash"];
}
if(isset($_POST["btn_submit"])){
	$id = $_POST["article_id"];
	$cate_id = trim($_POST["cate_id"]);
	$user_id = trim($_POST["user_id"]);
	$title = trim($_POST["title"]);
	$description = trim($_POST["description"]);
	$date_added = trim($_POST["date_added"]);
	$date_modified = trim($_POST["date_modified"]);
	$is_publish = trim($_POST["is_publish"]);
	$is_trash = trim($_POST["is_trash"]);
	$sql = "UPDATE tb_article SET cate_id=$cate_id, user_id=$user_id, title='$title', description='$description', date_added='$date_added', date_modified='$date_modified', is_publish='$is_publish', is_trash='$is_trash' WHERE article_id=$id";

	$result = mysqli_query($cn, $sql);
	if(mysqli_errno($cn) > 0){
		die("Execute SQL Statement failed. MySQL said: " . mysqli_error($cn));
	}else{
		header("location:select.php");
		exit();
	}
	mysqli_close($cn);
}
?>

<style>*{margin: 0px; padding: 0px}</style>

<div style="background: url(img/back-ground-background-images-website-official.jpg); height: 638px; padding-top: 100px; padding-left: 300px">
<form action="" method="post">
	<table>
		<tr>
			<td><label for="cate_id"><b style="margin-right: 19px">Category ID: </b></label></td>
			<td><input style="line-height: 30px; width: 215px" type="number" name="cate_id" id="cate_id" value="<?php echo $cate_id; ?>" ></td>
		</tr>
		<tr>
			<td><label for="user_id"><b style="margin-right: 19px">User ID: </b></label></td>
			<td><input style="line-height: 30px; width: 215px" type="number" value="<?php echo $user_id; ?>" name="user_id" id="user_id"></td>
		</tr>
		<tr>
			<td><label for="title"><b style="margin-right: 19px">Title: </b></label></td>
			<td><input style="line-height: 30px; width: 215px" type="text" value="<?php echo $title; ?>" name="title" id="title"></td>
		</tr>
		<tr>
			<td><label for="description"><b style="margin-right: 19px">Description: </b></label></td>
			<td><input style="padding-bottom: 120px; width: 215px" style="padding-bottom: 100px" type="description" value="<?php echo $description; ?>" name="description" id="description">
			</td>
		</tr>
		<tr>
			<td><label for="date_added"><b style="margin-right: 19px">Date_Added: </b></label></td>
			<td><input style="line-height: 30px; width: 215px" type="datetime" value="<?php echo $date_added; ?>" name="date_added" id="date_added"></td>
		</tr>
		<tr>
			<td><label for="$date_modified"><b style="margin-right: 19px">Date_Modified: </b></label></td>
			<td><input style="line-height: 30px; width: 215px" type="datetime" value="<?php echo $date_modified; ?>" name="date_modified" id="date_modified"></td>
		</tr>
		<tr>
			<td><label for="is_publish"><b style="margin-right: 19px">Is_Publish: </b></label></td>
			<td><input style="line-height: 30px; width: 215px" type="text" value="<?php echo $is_publish; ?>" name="is_publish" id="is_publish"></td>
		</tr>
		<tr>
			<td><label for="is_trash"><b style="margin-right: 19px">Is_Trash: </b></label></td>
			<td><input style="line-height: 30px; width: 215px" type="text" value="<?php echo $is_trash; ?>" name="is_trash" id="is_trash"></td>
		</tr>
		<tr>
			<td colspan="2"><input style="font-family: Times New Roman; font-size: 20px; color: blue; background: #C0C0C0; margin-left: 200px; margin-top: 20px" type="submit" name="btn_submit" value=" Update "></td>
		</tr>
	</table>
	<input type="hidden" name="article_id" id="article_id" value="<?php echo $id; ?>">
</form>
</div>