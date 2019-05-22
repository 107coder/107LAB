<?php
require("dbconfig.php");
$link = @mysqli_connect(HOST,USER,PASS)or die("数据库连接失败");
mysqli_select_db($link,DBNAME);

$username=$_POST["账号"];
$password=$_POST["密码"];
$act=$_GET["act"];
 mysqli_query("SET NAMES utf8"); 
 header("Content-Type: text/html; charset=utf-8");

switch($act){
	case 'adduser';
	
	$sql= "select * from manager where username='$_POST[账号]'";
	$rel=mysqli_query($link,$sql);
	if(mysqli_num_rows($rel)>0)
	{
		echo "<script>
		alert('该用户名已存在，请重新注册！');
		location.href='注册.html';
		</script>";
	}
	else{
		   $sql="INSERT manager(username,password) values('{$username}','{$password}')";
		   $rel=mysqli_query($link,$sql);
		   
		   if(!mysqli_num_rows($rel))
		   {
          echo "<script>
		   alert('注册成功！');
		   location.href='登录.html';
		   </script>";
		   }
		   else{
			   echo "<script>
		   alert('注册失败！请重新注册！');
		   location.href='注册.html';
		   </script>";
		   }
        }
}
?> 