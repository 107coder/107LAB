<?php
header('content-type:text/html;charset=UTF-8');
$mysqli = new mysqli('localhost','root','root','test');
if($mysqli->errno){
	die('connect error' .$mysqli->error);
}
$mysqli->set_charset('UTF8');?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<title>document</title>
</head>
<body>
<h2>登陆页面</h2>
<form action="dologin.php method='post'">
username:<input type="test" name="username" id=""/><br />
password:<input type="password" name="password" id=""/><br />
<input type="submit" value="登陆"/>
</body>
</html>
