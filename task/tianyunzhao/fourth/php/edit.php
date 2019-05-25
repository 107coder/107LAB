<?php
header('Content-Type: text/html;charset=UTF-8');
?>
<html>
<head>
	<title>新闻管理系统</title>
</head>
<body>
	<center>
		<?php 
		   
			include("menu2.php"); //导入导航栏 
			
			//1. 导入配置文件
				require("dbconfig.php");
				
			//2. 连接MySQL、选择数据库
				$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
				mysqli_select_db($link,DBNAME);
				
			//3. 获取要修改信息的id号，并拼装查看sql语句，执行查询，获取要修改的信息
				$sql = "select * from news where id={$_GET['id']}";
				$result = mysqli_query($link,$sql);
				mysqli_set_charset($link,"UTF-8");
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
			<table width="320" border="0">
				<tr>
					<td align="right">标题:</td>
					<td><input type="text" name="title" value="<?php echo $news['title']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">关键字:</td>
					<td><input type="text" name="keywords" value="<?php echo $news['keywords']; ?>"/></td>
				</tr>
				<tr>
					<td align="right">作者:</td>
					<td><input type="text" name="author" value="<?php echo $news['author']; ?>"/></td>
				</tr>
				<tr>
					<td align="right" valign="top">内容:</td>
					<td><textarea cols="25" rows="5" name="content"><?php echo $news['content']; ?></textarea></td>
				</tr>
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