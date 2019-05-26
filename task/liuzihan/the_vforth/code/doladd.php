<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>用户登录</title>
<?php header('content-type:text/html;charset=utf-8');?>
	</head>
	<body>
		<center>
			<?php include("menu1.php"); //导入导航栏 
            header('content-type:text/html;charset=gb2312');?>
		<div style="width: 100%;height: 100%;background-color: white;">
				<div style="background-color: lightgrey;width: 400px;height: 300px;top: 150px; position: relative;">
			<h1 style="position: relative; top: 40PX;">欢迎登陆</h3>
			<img src="" />
			<form action="addd.php? act=dolad" method="post" >
			<p>账号
			<input type="text" name="userid" placeholder="请输入您的账号" style="width: 200px; height: 30px;"/>
			</p>
			<p>密码
			<input type="text" name="passworda" value="" style="width: 200px; height: 30px;" />
			</p>
			<input type="submit" name=""  value="登录" style="width: 70px; height: 30px; position:relative ;left:120px ;float:left;"/>
			</form>
			<form action="superdoladd.php" method="post" >
			<input type="submit" name=""  value="超级管登录" style="width: 80px; height: 30px; position:relative ;left:150px ;float:left;"/>
			</form>
			</div>
		</div>
	</body>
</html>
