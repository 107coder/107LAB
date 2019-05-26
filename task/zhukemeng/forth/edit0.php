<html>
	<head>
		<title>修改简介</title>
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
			<?php 
				include("menu.php"); //导入导航栏 
				
				//1. 导入配置文件
					require("introduction_dbconfig.php");
					
				//2. 连接mysqli、选择数据库
					$link4 = @mysqli_connect(HOST4,USER4,PASS4) or die("数据库连接失败！");
					mysqli_select_db($link4,DBNAME4);
					mysqli_set_charset($link4,'utf8'); 
					
				//3. 获取要修改信息的id号，并拼装查看sql语句，执行查询，获取要修改的信息
					$sql4 = "select * from news where id={$_GET['id']}";
					$result = mysqli_query($link4,$sql4);
					
				//4. 判断是否获取到了要修改的信息
					if($result && mysqli_num_rows($result)>0){
						$news = mysqli_fetch_assoc($result);
					}else{
						die("没有找到要修改的信息！");
					}
			?>
			
			<h3>编辑简介</h3>
			<form action="action0.php?action0=update" method="post">
				<input type="hidden" name="id" value="<?php echo $news['id']; ?>"/>
				<table width="320" border="0">
					<tr>
						<td align="right">标题:</td>
						<td><input type="text" name="title" value="<?php echo $news['title']; ?>"/></td>
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