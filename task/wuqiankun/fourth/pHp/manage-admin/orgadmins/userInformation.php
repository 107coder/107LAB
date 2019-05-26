<html>
	<head>
		<title>个人信息</title>
	</head>
	<body>
		<center>
            <div width="90%">
				<div width="200px" margin="auto">
					<h2>个人信息</h2>
				</div>
				<hr width="90%"/>
			</div>
			<?php 
				
				
                define("HOST","localhost");
                define("USER","root");
                define("PASSWORD","");
                define("DBNAME","admin");
                session_start();
				//2. 连接MySQL、选择数据库
					$link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
                    mysqli_select_db($link,"admin");
                    mysqli_set_charset($link, "utf8");
				//3. 获取要修改信息的id号，并拼装查看sql语句，执行查询，获取要修改的信息
					$sql = "select * from admins where username = '{$_SESSION['username']}'";
					$result = mysqli_query($link,$sql);
				//4. 判断是否获取到了要修改的信息
					if($result && mysqli_num_rows($result)>0){
						$users = mysqli_fetch_assoc($result);
					}else{
						die("没有找到要修改的信息！");
					}
					mysqli_close($link);
			?>
			

			<form action="xiugai.php" method="post">
		
				<table width="320px" border="0">
					<tr>
						<td align="right">用户名:</td>
						<td><input type="text" name="username" value="<?php echo $users['username']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">密码:</td>
						<td><input type="text" name="password" value="<?php echo $users['password']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">真实姓名:</td>
						<td><input type="text" name="truename" value="<?php echo $users['truename']; ?>"/></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="保存"/>&nbsp;&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>