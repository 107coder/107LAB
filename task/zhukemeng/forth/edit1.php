<html>
	<head>
		<title>用户管理系统</title>
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
				include("menu0.php"); //导入导航栏 
				
				//1. 导入配置文件
					require("userdbconfig.php");
					
				//2. 连接mysqli、选择数据库
					$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
					mysqli_select_db($link,DBNAME);
					mysqli_set_charset($link,'utf8'); 
					
				//3. 获取要修改信息的id号，并拼装查看sql语句，执行查询，获取要修改的信息
					$sql = "select * from manager where id={$_GET['id']}";
					$result = mysqli_query($link,$sql);
					
				//4. 判断是否获取到了要修改的信息
					if($result && mysqli_num_rows($result)>0){
						$users = mysqli_fetch_assoc($result);
					}else{
						die("没有找到要修改的信息！");
					}
			?>
			
			<h3>管理用户</h3>
			<form action="action1.php?action1=update" method="post">
				<input type="hidden" name="id" value="<?php echo $users['id']; ?>"/>
				<table width="320" border="0">
					<tr>
						<td align="right">用户名:</td>
						<td><input type="text" name="username" value="<?php echo $users['username']; ?>"/></td>
					</tr>
					<tr>
						<td align="right">密码:</td>
						<td><input type="text" name="password" value="<?php echo $users['password']; ?>"/></td>
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