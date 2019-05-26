<html>
	<head>
		<title>新闻管理</title>
	</head>
	<body>
		<center>
			<div width="90%">
				<div width="200px" margin="auto">
					<h2>用户管理</h2>
					<a href="admins.php">用户列表</a>
				</div>
				<hr width="90%"/>
			</div>
			<?php 
				define("HOST","localhost");
                define("USER","root");
                define("PASSWORD","");
                define("DBNAME","admin");

                $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
                    mysqli_select_db($link,"admin");
                    mysqli_set_charset($link, "utf8");
					
				//3. 获取要修改信息的id号，并拼装查看sql语句，执行查询，获取要修改的信息
					$sql = "select * from admins where id={$_GET['id']}";
					$result = mysqli_query($link,$sql);
					
				//4. 判断是否获取到了要修改的信息
					if($result && mysqli_num_rows($result)>0){
						$admins = mysqli_fetch_assoc($result);
					}else{
						die("没有找到要修改的信息！");
					}
			?>
			
			<h3>修改用户</h3>
			<form action="action.php?action=update" method="post">
				<input type="hidden" name="id" value="<?php echo $admins['id']; ?>"/>
				<table width="320px" border="0">
					<tr>
						<td align="right">用户名:</td>
						<td><input type="text" name="username" value="<?php echo $admins['username']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">密码:</td>
						<td><input type="text" name="password" value="<?php echo $admins['password']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">真实姓名:</td>
						<td><input type="text" name="truename" value="<?php echo $admins['truename']; ?>"/></td>
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