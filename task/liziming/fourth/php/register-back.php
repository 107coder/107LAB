<?php
require("userdbconfig.php");
$link = @mysqli_connect(HOST, USER, PASS) or die("数据库连接失败");
mysqli_select_db($link, DBNAME);

$username = $_POST["username"];
$password = $_POST["password"];
mysqli_set_charset($link,'utf8');
$type = $_POST["type"];
if ($type == "普通管理员") {  //判断注册类型->普通管理员
	$sql = "select * from manager where username='$_POST[username]'";
	$rel = mysqli_query($link, $sql);
	if (mysqli_num_rows($rel) > 0) {
		echo "<script>alert('该用户名已存在，请重新注册')</script>";
	} else {
		$sql = "INSERT INTO manager(username,password,type) values($username,$password,0)";
		$rel = mysqli_query($link, $sql);
		if (!mysqli_num_rows($rel)) {
			echo "<script>
			 alert('注册成功!返回登录。');
			 location.href='login.php';                                  
			 </script>";
		} else {
			echo "<script>alert('注册失败，请重新注册!')</script>";
		}
	}
} else {         //判断注册类型->超级管理员
	$sql = "select * from manager where username='$_POST[username]'";
	$rel = mysqli_query($link, $sql);
	if (mysqli_num_rows($rel) > 0) {
		echo "<script>alert('该用户名已存在，请重新注册')</script>";
	} else {
		$sql = "INSERT INTO manager(username,password,type) values($username,$password,1)";
		$rel = mysqli_query($link, $sql);
		if (!mysqli_num_rows($rel)) {
			echo "<script>
							alert('注册成功!返回登录。');
							location.href='login.php';
							</script>";
		} else {
			echo "<script>alert('注册失败，请重新注册!')</script>";
		}
	}
}
