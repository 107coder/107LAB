<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>注册</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;}
.headtop{background:url(topbg.jpg);height:28px;}
body{
  background:url(../images/324177.jpg);
  font-family: "微软雅黑", sans-serif;
  background-size: 100%,100%;
  background-repeat: no-repeat;
}
.login { 
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -150px 0 0 -150px;
    width:300px;
    height:300px;
}
.login h1 { 
	color:#555555; 
	text-shadow: 0px 10px 8px #E3C493; 
	letter-spacing:2px;
	text-align:center;
	margin-bottom:20px; 
}
input{
    padding:10px;
    width:100%;
    color:white;
    margin-bottom:10px;
    background-color:#555555;
    border: 1px solid black;
    border-radius:4px;
    letter-spacing:2px;
}
form button{
    width:100%;
    padding:10px;
    background-color:#E3C493;
    border:1px solid black;
    border-radius:4px;
    cursor:pointer; 
    margin-bottom:10px;
}                                                                                                                                                  
</style>
</head>
<body>
<div class="headtop"></div>
<div class="login">
  <h1>Super-register</h1>
  <form action="super-register-back.php?act=adduser" method="post">
    <input type="text" name="superusername" placeholder="请输入用户名" required='required'/>
    <input type="password" name="superpassword" placeholder="请输入密码" required='required'/>
	<input type="password" name="superpassword" placeholder="请再次输入密码" required='required'/>
  <button type="submit">注册</button>
  </form>
</div>
</body>
</html>