
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>管理员登录</title>
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
		<script src="../JS/public.js"></script>
		<link rel="stylesheet" href="../4/CSS/public.css">
	</head>

	<body>
	<div class="page">
		<!--头部-->
		 <?php require_once './menu2.php'; ?>
		<?php session_start();?>
		<!--中间-->
		<div class="back"><img src="../4/images/henu4.jpg"></img>
			<div class="main">
				<form action = "./adminLoginAction.php" method = "post">
					<div class="adminname">管理员名:<br><input type = "text" name = "adminname" class="adminname"></div> 
					<div class="password">密码:<br><input type = "password" name = "password"></div>
                    <lable class="lable"><input type="checkbox" name="remember" >记住密码</lable>
					<div class="sub"><input type = "submit" value = "登陆" name = "subl"></div>
					
				</form>
			</div>
		</div>
		<!--底部-->
		
	</body>
<style>
a{
  color:#ECF0F1;
  text-decoration: none;

}
a:hover{
  color:red;
}

.header-2 {
		height:80px;
	}
.header-2 img{
	margin-top: 10px;
	margin-left: 10%;
}
.back{
        position: relative;
    }
.back img{
    
    width:100%;
    height:860px;
    
    }
.main{
    position: absolute;
    top:52%;
    left:62%;
    width:450px;
    height:350px;
    margin: auto;
    margin-bottom: 50px;
  
}
.lable{
    position: relative;
    top:10px;
    
}
.adminname{
     font-size: 17px;
}
.adminname input{
    width:300px;
    height:30px;
    margin-top: 2px;
}
.password{
    font-size: 17px;
    margin-top: 23px;
}
.password input{
    width:300px;
    height:30px;
    margin-top: 2px;
}
.sub{
    margin-top: 36px;
    width:100px;
    
}
.sub input{
    width:300px;
    height:35px;
    font-size: 18px;
    letter-spacing: 7px;
    background-color:rgba(57,164,219,0.7);
    
}
.main a{
    color:#fff;
    font-size: 18px;
    margin-left: 130px;
    position: relative;
    top:15px;
}
.main a:hover{
    color:red;
}



</style>
</html>
