<?php
require("newsdbconfig.php");
$link2=@mysqli_connect(HOST2,USER2,PASS2)or die("数据库连接失败");
mysqli_select_db($link2,DBNAME2);
mysqli_set_charset($link2,'utf8'); 

	$sql="select * from manager where username='$_POST[username]'";
	$rel=mysqli_query($link2,$sql);
	if(mysqli_num_rows($rel)>0){
		echo"<script>alert('该用户名已存在，请重新注册')</script>";	
	}else{
		$sql="INSERT manager(username,password) values('{$username}','{$password}')";
		$rel=mysqli_query($link,$sql);
		if(!mysqli_num_rows($rel)){
		echo"<script>
		alert('成功!返回。');
		location.href='#';
		</script>";
		}else{
			echo"<script>alert('注册失败，请重新注册!')</script>";
		}	
	}
?>