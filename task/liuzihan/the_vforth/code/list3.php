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
			
			<!-----搜索表单--------->
				<form action="list3.php" method="get">
					标题：<input type="text" name="title" size="8" value="<?php echo $_GET['title']; ?>" />&nbsp;
					关键字：<input type="text" name="keywords" size="8" value="<?php echo $_GET['keywords']; ?>" />&nbsp;
					作者：<input type="text" name="author"  size="8"  value="<?php echo $_GET['author']; ?>"/>&nbsp;
					<input type="submit" value="搜索"/>
					<input type="button" value="全部信息" onclick="window.location='list3.php'"/>
				</form>
			<!-------------->
			
			<table width="880" border="1">
				<tr>
					<th>新闻id</th><th>新闻标题</th><th>关键字</th>
					<th>作者</th><th>发布时间</th><th>新闻内容</th>
					<th>操作</th>
				</tr>
				<?php
					//=============================
					//封装搜索信息
					$wherelist = array();//定义一个封装搜索条件的数组变量
					$urllist = array(); //定义了一个封装搜索条件的url数组，语句放置到url后面做url参数使用
					//判断新闻标题是否有值，若有则封装此搜索条件
					if(!empty($_GET["title"])){
						$wherelist[]="title like '%{$_GET['title']}%'";
						$urllist[]="title={$_GET['title']}";
					}
					//判断关键字是否有值，若有则封装此搜索条件
					if(!empty($_GET["keywords"])){
						$wherelist[]="keywords like '%{$_GET['keywords']}%'";
						$urllist[]="keywords={$_GET['keywords']}";
					}
					//判断作者是否有值，若有则封装此搜索条件
					if(!empty($_GET["author"])){
						$wherelist[]="author like '%{$_GET['author']}%'";
						$urllist[]="author={$_GET['author']}";
					}
					//组装搜索条件
					if(count($wherelist)>0){
						$where = " where ".implode(" and ",$wherelist);
						$url = "&".implode("&",$urllist);
					}
					//echo $where;
					//echo $url;
					//=============================
					
					//1.导入配置文件
						require("dbconfig.php");
						
					//2.连接MySQL，选择数据库
						$link = @mysql_connect(HOST,USER,PASS) or die("数据库连接失败！");
						mysql_select_db(DBNAME,$link);
						
					//2.1 插入分页处理代码
					//======================================
						//1. 定义一些分页变量
						$page=isset($_GET["page"])?$_GET['page']:1;		//当前页号
						$pageSize=3;	//页大小
						$maxRows;		//最大数据条
						$maxPages;		//最大页数
						
						//2. 获取最大数据条数
						$sql = "select count(*) from news {$where}";
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
						$sql = "select * from news {$where} order by addtime desc {$limit}";
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
					echo " <a href='list3.php?page=1{$url}'>首页</a> ";
					echo " <a href='list3.php?page=".($page-1)."{$url}'>上一页</a> ";
					echo " <a href='list3.php?page=".($page+1)."{$url}'>下一页</a> ";
					echo " <a href='list3.php?page={$maxPages}{$url}'>末页</a> ";
				?>
		</center>
	</body>
</html>