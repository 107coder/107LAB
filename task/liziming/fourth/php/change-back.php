<?php
//这是一个修改密码的处理页

//（1）、 导入配置文件
	require("userdbconfig.php");
	
//（2）、连接MySQL、并选择数据库
	$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
	mysqli_select_db($link,DBNAME);
	mysqli_set_charset($link,'utf8');
	
//（3）、根据需要action值，来判断所属操作，执行对应的代码
				//1. 获取要修改的信息
				$username = $_POST["username"];
				$password = $_POST["password"];
				// $pusername = $_POST["pusername"];
				// $ppusername = $_POST["ppusername"];
				$newpassword = $_POST["newpassword"];
				
				//2. 过滤要修改的信息（省略）
				//3. 拼装修改sql语句，并执行修改操作
				$sql = "update manager set password='$newpassword' where username='$username'";
				//echo $sql;
				mysqli_query($link,$sql);
			
				//4. 跳转回浏览界面
				header("Location:login.php?");
	
//（4）、关闭数据连接
	mysqli_close($link);
