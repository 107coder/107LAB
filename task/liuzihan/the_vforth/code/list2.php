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
		<?php header('content-type:text/html;charset=gb2312');?>
	</head>
	<body>
		<center>
			<?php include("menu.php"); //导入导航栏 ?>
			
			<h3>分页浏览新闻</h3>
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
						$link = @mysql_connect(HOST,USER,) or die("数据库连接失败！");
						mysql_select_db(liuzihan,$link);
						
					//2.1 插入分页处理代码
					//======================================
						//1. 定义一些分页变量
						$page=isset($_GET["page"])?$_GET['page']:1;		//当前页号
						$pageSize=3;	//页大小
						$maxRows;		//最大数据条
						$maxPages;		//最大页数
						
						//2. 获取最大数据条数
						$sql = "select count(*) from news";
						$res = mysql_query($sql,$link);
						$maxRows = mysql_result($res,0,0); //定位从结果集中获取总数据条数这个值。
						//3. 计算出共计最大页数
						$maxPages = ceil($maxRows/$pageSize); //采用进一求整法算出最大页数 
						
						//4. 效验当前页数
						if($page>$maxPages){
							$page=$maxPages;
						}
						if($page<1){
							$page=1;
						}
						
						//5. 拼装分页sql语句片段
						$limit = " limit ".(($page-1)*$pageSize).",{$pageSize}";   //起始位置是当前页减一乘以页大小
					//======================================
					
					//3. 执行查询，并返回结果集
						$sql = "select * from news order by addtime desc {$limit}";
						$result = mysql_query($sql,$link);
						
					//4. 解析结果集,并遍历输出
						while($row = mysql_fetch_assoc($result)){
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
							echo "</tr>";
						}
					//5. 释放结果集
						mysql_free_result($result);
						mysql_close($link);
				?>
			</table>
				<?php
					//输出分页信息，显示上一页和下一页的连接
					echo "<br/><br/>";
					echo "当前{$page}/{$maxPages}页 共计{$maxRows}条";
					echo " <a href='list2.php?page=1'>首页</a> ";
					echo " <a href='list2.php?page=".($page-1)."'>上一页</a> ";
					echo " <a href='list2.php?page=".($page+1)."'>下一页</a> ";
					echo " <a href='list2.php?page={$maxPages}'>末页</a> ";
				?>
		</center>
	</body>
</html>