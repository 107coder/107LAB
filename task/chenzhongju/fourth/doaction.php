<?php
require("dbconfig.php");
$link = @mysqli_connect(HOST,USER,PASS)or die("数据库连接失败");
mysqli_select_db($link,DBNAME);
session_start();
$username=$_POST["账号"];
$password=$_POST["密码"];
$_Session['username']=$username;
 $sql="select * from manager where username='$username' and password='$password'" ;
$rel=mysqli_query($link,$sql);
	if(mysqli_num_rows($rel)>0)
	{
	echo "<script>
	alert('你已登录成功!')；
	</script>";
		echo  "<a href=管理界面.php>$username !你好！点击进入</a><br>" ;
		echo "<a href='loginout.php'>退出登录</a>";} 
else
{
	 echo "<script>
		   alert('登录失败！请重新登录！');
		   location.href='登录.html';
		   </script>";
}
?>