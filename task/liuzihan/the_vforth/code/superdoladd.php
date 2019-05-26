
<html>
	<head>
		<meta charset="utf-8">
        
		<title>超级管理员请登录</title>
<?php header('content-type:text/html;charset=utf-8');?>
	</head>
	<body>
		<center>
			<?php include("menu1.php"); //导入导航栏 ?>
		<div style="width: 100%;height: 100%;background-color: white;">
				<div style="background-color: lightgrey;width: 400px;height: 300px;top: 150px; position: relative;">
			<h1 style="position: relative; top: 40PX;">欢迎登陆</h3>
            <br/><br?>
			<img src="" />
			<form action="addd.php? act=superdolad" method="post" >
			<p>账号
			<input type="text" name="superuserid" placeholder="请输入您的账号" style="width: 200px; height: 30px;"/>
			</p>
			<p>密码
			<input type="text" name="superpassworda" value="" style="width: 200px; height: 30px;" />
			</p>
            <br/>
			<input type="submit" name=""  value="登录" style="width: 70px; height: 30px; position:relative ;left:120px ;float:left;"/>
			<a href="doladd.php"><input type="button" name=""  value="返回上级" style="width: 70px; height: 30px; position:relative ;left:170px ;float:left;"/><a/>
			</form>
			</div>
		</div>
	</body>
</html>