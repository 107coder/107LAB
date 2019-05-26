<html>
	<head>
	<meta charset="UTF-8">
		<title>新闻管理系统</title>
		<script type="text/javascript">
			function dodel(id){
				if(confirm("确定要删除吗？")){
					window.location="action.php?action=del&id="+id;
				}
			}
		
		</script>
		<style>
		body{
			background:url(../images/324181.jpg);
            font-family: "微软雅黑", sans-serif;
            background-size: 100%,100%;
            background-repeat: no-repeat;
		}
		</style>
	</head>
	<body>
		<center>
			<?php include("menu.php"); //导入导航栏?>
			
			<h2>浏览新闻</h2>
			<table width="880" border="1">
				<tr>
					<th>新闻id</th><th>新闻标题</th>
					<th>作者</th><th>发布时间</th><th>新闻内容</th>
					<th>操作</th>
				</tr>
			<?php
			require("userdbconfig.php");
				$link = @mysqli_connect(HOST,USER,PASS)or die("数据库连接失败");
				mysqli_select_db($link,DBNAME);
				mysqli_set_charset($link,'utf8'); 
				//获取账号密码
				$username=$_POST["username"];
				$password=$_POST["password"];

				//如果登录成功
				/*$sql="select * from manager where username='$username' and password='$password'" ;
				$rel=mysqli_query($link,$sql);
				if(mysqli_num_rows($rel)>0)*/
				{
					//1.导入配置文件
						require("newsdbconfig.php");
						
					//2.连接mysqli，选择数据库
						$link2 = @mysqli_connect(HOST2,USER2,PASS2) or die("数据库连接失败！");
						mysqli_select_db($link2,DBNAME2);
						mysqli_set_charset($link2,'utf8'); 
						
					//3. 执行查询，并返回结果集
						$sql2 = "select * from news order by addtime desc";
						$result = mysqli_query($link2,$sql2);
						
					//4. 解析结果集,并遍历输出
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr>";
							echo "<td>{$row['id']}</td>";
							echo "<td>{$row['title']}</td>";
							echo "<td>{$row['author']}</td>";
							echo "<td>".date("Y-m-d",$row['addtime'])."</td>";
							echo "<td>{$row['content']}</td>";
							echo "<td>
								<a href='javascript:dodel({$row['id']})'>删除</a>
								<a href='edit.php?id={$row['id']}'>修改</a></td>";
							echo "</tr>";
						}
					//5. 释放结果集
						mysqli_free_result($result);
						mysqli_close($link2);
						}/*else{
					echo "<script>
					   alert('登录失败！请重新登录！');
					   location.href='login.php';
					   </script>";
				}*/
			?>
			</table>
		</center>
		<div style="margin-left:70%"><?php echo '你好，'.$username?><a>&nbsp;&nbsp;&nbsp;</a><a href="login.php">点击退出</a></div>
	</body>
</html>