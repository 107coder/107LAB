<?php
//这是一个信息增、删和改操作的处理页

//（1）、 导入配置文件
	require("userdbconfig.php");
	
//（2）、连接MySQL、并选择数据库
	$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
	mysqli_select_db($link,DBNAME);
	mysqli_set_charset($link,'utf8');
	
//（3）、根据需要action值，来判断所属操作，执行对应的代码
	switch($_GET["action"]){
		case "add": //执行添加操作
			//1. 获取要添加的信息，并补充其他信息
				$title = $_POST["username"];
				$author = $_POST["password"];
				
			//2. 做信息过滤（省略）
			//3. 拼装添加SQL语句，并执行添加操作
				$sql = "insert into manager values('$username','$password')";
				//echo $sql;
				mysqli_query($link,$sql);
				
			//4. 判断是否成功
				$id = mysqli_insert_id($link);//获取刚刚添加信息的自增id号值
				if($id>0){
					echo "<h3>新闻信息添加成功！</h3>";
				}else{
					echo "<h3>新闻信息添加失败！</h3>";
				}
				echo "<a href='javascript:window.history.back();'>返回</a>&nbsp;&nbsp;";
				echo "<a href='user.php'>浏览新闻</a>";
				
				break;
		
		case "del": //执行删除操作
				//1. 获取要删除的id号
				$username=$_GET['username'];
				//2. 拼装删除sql语句，并执行删除操作
				$sql = "delete from manager where username={$username}";
				mysqli_query($link,$sql);
				
				//3. 自动跳转到浏览新闻界面
				header("Location:news.php");
			break;
			
		case "update": //执行修改操作
				//1. 获取要修改的信息
				$username = $_POST["username"];
				$password = $_POST["password"];
				$pusername = $_POST["pusername"];
				$ppusername = $_POST["ppusername"];
				
				//2. 过滤要修改的信息（省略）
				//3. 拼装修改sql语句，并执行修改操作
				$sql = "update manager set username='$username',password='$password' where username='$pusername'";
				//echo $sql;
				mysqli_query($link,$sql);
			
				//4. 跳转回浏览界面
				header("Location:user.php?username=$ppusername");
				
			break;
	
	}
	
//（4）、关闭数据连接
	mysqli_close($link);
