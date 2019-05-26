<html>
	<head>
		<title>新闻管理系统</title>
		<style>
		body{
			background:url(../images/324182.jpg);
            font-family: "微软雅黑", sans-serif;
            background-size: 100%,100%;
            background-repeat: no-repeat;
		}
		</style>
	</head>
	<body>
		<center>
			<?php 
				include("menu.php"); //导入导航栏 
				
				//1. 导入配置文件
					require("newsdbconfig.php");
					
				//2. 连接mysqli、选择数据库
					$link2 = @mysqli_connect(HOST2,USER2,PASS2) or die("数据库连接失败！");
					mysqli_select_db($link2,DBNAME2);
					mysqli_set_charset($link2,'utf8');
					
				//3. 获取要修改信息的id号，并拼装查看sql语句，执行查询，获取要修改的信息
					$sql2 = "select * from news where id={$_GET['id']}";
					$result = mysqli_query($link2,$sql2);
					
				//4. 判断是否获取到了要修改的信息
					if($result && mysqli_num_rows($result)>0){
						$news = mysqli_fetch_assoc($result);
					}else{
						die("没有找到要修改的信息！");
					}
			?>
			
			<h3>编辑新闻</h3>
			<form action="action.php?action=update" method="post">
				<input type="hidden" name="id" value="<?php echo $news['id']; ?>"/>
				<table width="620" border="0">
					<tr>
						<td align="right">标题:</td>
						<td><input type="text" name="title" style="width:360px" value="<?php echo $news['title']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">作者:</td>
						<td><input type="text" name="author" style="width:360px" value="<?php echo $news['author']; ?>"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">内容:</td>
						<td><textarea cols="48" rows="10" name="content"><?php echo $news['content']; ?></textarea></td>
					</tr>
					<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="编辑"/>&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>