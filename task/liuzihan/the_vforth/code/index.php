<html>
	<head>
	<?php header('content-type:text/html;charset=utf8');?>
		<title>新闻管理系统</title>
		<script type="text/javascript">
			function dodel(id){
				if(confirm("确定要删除吗？")){
					window.location="action.php?action=del&id="+id;
				}
			}
			function toptop(id){
				window.location="action.php?action=top&id="+id;
			}
			function toptop1(id){
				if(confirm("确定要取消置顶吗？")){
				window.location="action.php?action=cancle&id="+id;
				}

			}
		
		</script>
		
	</head>
	<body>
		<center>
			<?php include("menu.php"); //导入导航栏 ?>			
			<h3>浏览新闻</h3>
			<table width="930" border="1">
				<tr>
					<th>新闻id</th><th>新闻标题</th><th>关键字</th>
					<th>作者</th><th>发布时间</th><th>新闻内容</th>
					<th>操作</th><th>置顶</th>
				</tr>
				<?php
					//1.导入配置文件
						require("dbconfig.php");
						
					
						
					
					function tablee($toptop){
						//2.连接MySQL，选择数据库
						$passwordc='';
	                    $userss='root';
	                    $loaddd='localhost';
	                    $link = @mysqli_connect($loaddd,$userss,$passwordc) or die("数据库连接失败！");
						mysqli_select_db($link,'liuzihan');
						mysqli_set_charset($link, "utf8");
						//mysql_query("set names 'utf8'");
						//3. 执行查询，并返回结果集
						$sql = "select * from news where toptop='{$toptop}' order by addtime desc";
						$results = mysqli_query($link,$sql);
						
					//4. 解析结果集,并遍历输出
						while($row = mysqli_fetch_assoc($results)){
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
								/*$top="置顶";
								$sql1="select toptop from news whehe toptop=1";
								$results1 = mysqli_query($link,$sql1);
								//$rowtop=mysqli_fetch_array($results1,MYSQLI_NUM);
								var_dump( $results1);
								//echo $rowtop;*/
								if($row['toptop']==1)
								echo " <td><a href='javascript:toptop1({$row['id']})'>取消置顶</a></td>";
								else echo "<td><a href='javascript:toptop({$row['id']})'>置顶</a></td>";
							echo "</tr>";
							
						}
						//5. 释放结果集
						mysqli_free_result($results);
						mysqli_close($link);
					}
					tablee(1);
					tablee(0);
				?>
			</table>
		</center>
	</body>
</html>