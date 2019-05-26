<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登录</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;}
body{
  background:url(../images/298342.jpg);
  font-family: "微软雅黑", sans-serif;
  background-size: 100%,100%;
  background-repeat: no-repeat;
}
.headtop{background:url(topbg.jpg);height:28px;}
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
    text-shadow: 0px 10px 8px #CDC673; 
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
    background-color:#CDC673;
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
  <h1>Login</h1>
  <form action="news.php" method="post">
    <input type="text" name="username" placeholder="请输入用户名" required='required'/>
    <input type="password" name="password" placeholder="请输入密码" required='required'/>
    <button type="submit">登录</button>
	<button><a href="register.php">没有用户？点击注册</a></button>
  </form>

</div>
</body>
</html>