<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>hashing basic security</title>
</head>
<?php
	$pass="1234";
	$input="1234";
	$password= password_hash($pass,PASSWORD_DEFAULT)."<br>";
	
	$discrip=password_verify($input,$password);
	echo $pass."<br>";
	echo $discrip;
?>
<body>
</body>
</html>