<?php
require("superuserdbconfig.php");
$link3=@mysqli_connect(HOST3,USER3,PASS3)or die("数据库连接失败");
mysqli_select_db($link3,DBNAME3);
mysqli_set_charset($link3,'utf8'); 

$superusername=$_POST["superusername"];
$superpassword=$_POST["superpassword"];
$act=$_GET["act"];

switch($act){
	case 'adduser':
	$sql3="select * from supermanager where superusername='$_POST[superusername]'";
	$rel3=mysqli_query($link3,$sql3);
	if(mysqli_num_rows($rel)>0){
		echo"<script>alert('该用户名已存在，请重新注册')</script>";	
	}else{
		$sql3="INSERT supermanager(superusername,superpassword) values('{$superusername}','{$superpassword}')";
		$rel3=mysqli_query($link3,$sql3);
		if(!mysqli_num_rows($rel3)){
		echo"<script>
		alert('注册成功!返回登录。');
		location.href='super-login.php';
		</script>";
		}else{
			echo"<script>alert('注册失败，请重新注册!')</script>";
		}	
	}
}
?>