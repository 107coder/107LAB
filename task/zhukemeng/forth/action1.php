<?php
//这是一个信息增、删和改操作的处理页

//（1）、 导入配置文件
	require("userdbconfig.php");
	
//（2）、连接MySQL、并选择数据库
	$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
	mysqli_select_db($link,DBNAME);
	mysqli_set_charset($link,'utf8');
	
//（3）、根据需要action值，来判断所属操作，执行对应的代码
	switch($_GET["action1"]){
		case "del": //执行删除操作
				//1. 获取要删除的id号
				$id=$_GET['id'];
				
				//2. 拼装删除sql语句，并执行删除操作
				$sql = "delete from manager where id={$id}";
				mysqli_query($link,$sql);
				
				//3. 自动跳转到浏览新闻界面
				header("Location:user.php");
			break;
			
		case "update": //执行修改操作
				//1. 获取要修改的信息
				$id = $_GET['id'];
				$username = $_POST["username"];
				$password = $_POST["password"];
				
				//2. 过滤要修改的信息（省略）
				//3. 拼装修改sql语句，并执行修改操作
				$sql = "update manager set username='{$username}',password='{$password}' where id={$id}";
				//echo $sql;
				mysqli_query($link,$sql);
			
				//4. 跳转回浏览界面
				header("Location:user.php");
				
			break;
	
	}
	
//（4）、关闭数据连接
	mysqli_close($link);
