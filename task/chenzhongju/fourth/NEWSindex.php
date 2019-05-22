<html>
	<head>
		<title>新闻管理系统</title>
		<script type="text/javascript">
			function dodel(id){
				if(confirm("确定要删除吗？")){
					window.location="NEWSaction.php?action=del&id="+id;
				}
			}
		</script>
	</head>
	<body>
		<center>
			<?php include("NEWSmenu.php"); //导入导航栏 ?>
			
			<h3>浏览新闻</h3>
			<table width="880" border="1" bgcolor='#ABCDEF'>
				<tr>
				<th>新闻标题</th><th>关键字</th>
					<th>作者</th><th>发布时间</th><th>新闻内容</th>
					<th>操作</th>
				</tr>
				<?php
					//1.导入配置文件
					
						require("NEWSdbconfig.php");
						
					//2.连接MySQL，选择数据库
						$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
						mysqli_select_db($link,DBNAME);
						
					//3. 执行查询，并返回结果集
						$sql = "select * from news order by  addtime desc,id desc";
						$result = mysqli_query($link,$sql);
						
						
					//4. 解析结果集,并遍历输出
		
					if ($result=mysqli_query($link,$sql)){
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr>";
							echo "<td>{$row['title']}</td>";
							echo "<td>{$row['keywords']}</td>";
							echo "<td>{$row['author']}</td>";
							echo "<td>".date("Y-m-d",$row['addtime'])."</td>";
							echo "<td>{$row['content']}</td>";
							echo "<td>
								<a href='javascript:dodel({$row['id']})'>删除</a><br>
								<a href='NEWSedit.php?id={$row['id']}'>修改</a>
								</td>";
							echo "</tr>";
						}

						//5. 释放结果集
						mysqli_free_result($result);
					}
					
						mysqli_close($link);
				?>
</script>
			</table>
			<h2><a href="管理界面.php">返回管理界面</a></h2>
		</center>
	</body>
</html>