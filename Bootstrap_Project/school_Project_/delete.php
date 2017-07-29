<?php
if(isset($_GET["id"])){
	$id = (int)$_GET["id"];
	$cn = mysqli_connect("localhost","root","","db_news_chenla_08_oop");
	if(mysqli_connect_errno() > 0){
		die("Can not connect to MySQL Server. MySQL said: " . mysqli_connect_error());
	}

	$sql = "DELETE FROM tb_article WHERE article_id=$id LIMIT 1";

	$result = mysqli_query($cn, $sql);
	if(mysqli_errno($cn) > 0){
		die("Execute SQL Statement failed. MySQL said: " . mysqli_error($cn));
	}else{
		header("location:select.php");
		exit();
	}
}
?>