
<html>
	<head>
		<title>内容管理</title>
	</head>
	<body>
		<center>
			<h2>内容管理</h2>
	<hr width="90%"/>
			<h3>浏览内容</h3>
			<table width="880" border="1" bgcolor='#ABCDEF'>
				<tr>
				<th>内容</th>
				<td>操作</td>
				</tr>
				<?php
						require("INTdbconfig.php");
						$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
						mysqli_select_db($link,DBNAME);
						$sql = "select * from content";
						$result = mysqli_query($link,$sql);
					if ($result=mysqli_query($link,$sql)){
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr>";
							echo "<td>{$row['content']}</td>";
							echo "<td>
								<a href='INTindex.php?id={$row['id']}'>修改</a></td>";
							echo "</tr>";
						}
						mysqli_free_result($result);
					}
					
						mysqli_close($link);
				?>
			</table>
			<h2><a href="管理界面.php">返回管理界面</a></h2>
		</center>
	</body>
</html>