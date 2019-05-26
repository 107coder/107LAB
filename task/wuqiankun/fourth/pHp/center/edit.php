<html>
	<head>
		<title>中心简介</title>
	</head>
	<body>
		<center>
			<div width="90%">
					<div width="200px" margin="auto">
						<h2>中心简介</h2>
						<a href="./center.php">简介内容</a>
					</div>
					<hr width="90%"/>
			</div>
			<?php 
				
				//1. 导入配置文件
					require("../dbconfig.php");
					
				//2. 连接MySQL、选择数据库
					$link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
                    mysqli_select_db($link,"newsdb");
                    mysqli_set_charset($link, "utf8");
					
				//3. 获取要修改信息的id号，并拼装查看sql语句，执行查询，获取要修改的信息
					$sql = "select * from center_con where id={$_GET['id']}";
					$result = mysqli_query($link,$sql);
					
				//4. 判断是否获取到了要修改的信息
					if($result && mysqli_num_rows($result)>0){
						$center = mysqli_fetch_assoc($result);
					}else{
						die("没有找到要修改的信息！");
					}
			?>
			
			<h3>编辑新闻</h3>
			<form action="action.php?action=update" method="post">
				<input type="hidden" name="id" value="<?php echo $center['id']; ?>"/>
				<table width="320px" border="0">
					<tr>
						<td align="right">网站标题:</td>
						<td><input type="text" name="news_title" value="<?php echo $center['title']; ?>"/></td>
					</tr>
			
					<tr>
						<td align="right" valign="top">简介内容:</td>
						<td><textarea cols="25" rows="5" name="content"><?php echo $center['content']; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="编辑"/>&nbsp;&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>