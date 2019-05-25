<?php
header('Content-Type: text/html;charset=UTF-8');
?>
<html>
<head>
	<title>新闻管理系统</title>
	<script type="text/javascript">
		function dodel(id){
			if(confirm("确定要删除吗？")){
				window.location="action.php?action=del&id="+id;
			}
		}
	
	</script>
</head>
<body>
	<center>
		<?php include("menu2.php"); //导入导航栏 ?>
		
		<h3>浏览新闻</h3>
		<table width="880" border="1">
			<tr>
				<th>新闻id</th><th>新闻标题</th><th>关键字</th>
				<th>作者</th><th>发布时间</th><th>新闻内容</th>
				<th>操作</th>
			</tr>
			<?php
				//1.导入配置文件
					require("dbconfig.php");
					
				//2.连接MySQL，选择数据库
					$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
					mysqli_select_db($link,DBNAME);
					mysqli_set_charset($link,"UTF-8");
				//3. 执行查询，并返回结果集
					$sql = "select * from news order by addtime desc";
					$result = mysqli_query($link,$sql);
					
				//4. 解析结果集,并遍历输出
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>{$row['id']}</td>";
						echo "<td>{$row['title']}</td>";
						echo "<td>{$row['keywords']}</td>";
						echo "<td>{$row['author']}</td>";
						echo "<td>".date("Y-m-d",$row['addtime'])."</td>";
						echo "<td>{$row['content']}</td>";
						echo "<td>
							<a href='javascript:dodel({$row['id']})'>删除</a>
							<a href='edit.php?id={$row['id']}'>修改</a></td>";
							if($row['istop']){
								echo'<td> <a href="jiaohuan.php?act=cancel&id='.$row['id'].'">取消置顶</a></td>';
							}else{
								echo'<td> <a href="jiaohuan.php?act=istop&id='.$row['id'].'">置顶</a></td>';
							}
						echo "</tr>";
					}
				//5. 释放结果集
					mysqli_free_result($result);
					mysqli_close($link);
			?>
		</table>
	</center>
</body>
</html>