<!DOCTYPE html>
<html>
<head>
    <title>注册</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/register-logIn.css">
</head>
<body>
       
    <div class="header0">
        <img src="images/ICON.png">
    </div>
    <hr/>
    <div class="content4">
        <div class="content4-profile">
            <h1>Welcome to <br/>心理健康工作站</h1>
            <ul>
                <li>首页</li>
                <li>关于我们</li>
                <li>新闻公告</li>
                <li>心里百科</li>
                <li>心理保健</li>
                <li>心理咨询</li>
                <li>心理测评</li>
                <li>专题活动</li>
                <li>下载中心</li>
                <li>我要留言</li>
            </ul>
        </div>
        <div class="content4-form">
                <ul>
                    <li class="current">注册</li>
                    <a href="logIn.php"><li>登录</li></a>
                </ul>
            <div class="content4-form-tabbox">
                    <form action="registerHandle.php" method="post">
                        用户名:<br/>  
                        <input id="username" name="username" type="text" placeholder="用户名" required="required"/><br/>
                        密码:<br/>
                        <input id="password" name="password" type="password" placeholder="密码" required="required"/><br/>
                        年龄:<br/>
                        <input id="age" name="age" type="age" placeholder="年龄"/><br/>
                       <input class="submit" type="submit" value="注册"/>
                    </form>
            </div>
        </div>
    </div>

</body>
</html>
