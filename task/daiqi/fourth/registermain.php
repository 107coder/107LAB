<!DOCTYPE html>
<html>
<head>
<title>管理员注册</title>
<meta name="content-type" charset=UTF-8>
<link rel="stylesheet" type="text/css" href="front/frontstyle/public.css"/>
<link rel="stylesheet" type="text/css" href="style/register.css" />
</head>
<body>
	<div class="header_top">
		<div class="word">
			<ul>
				<li><a href="front/front.php">返回首页</a></li>
				<li>|</li>
				<li><a href="login.php">管理中心</a></li>
			</ul>
		</div>
	</div>
    <div id="content" align="center">
        <!--头部-->
        <div id="header">
        <h1>注册页面</h1>
        </div>
        <!--中部-->
        <div id="middle">
            <form action="register.php" method="post">
                <table>
                    <tr>
                        <td>用户名：</td>
                        <td><input type="text" id="name" name="name" required="required"></td>
                    </tr>
                    <tr>
                        <td>密&nbsp;&nbsp;&nbsp;码：</td>
                        <td><input type="password" id="password" name="password" required="required"></td>
                    </tr>
                    <tr>
                        <td>确认密码：</td>
                        <td><input type="password" id="password" name="re_password" required="required"></td>
                    </tr>
                    <tr>
                        <td>性别：</td>
                        <td>
                            <input type="radio" class="sex" name="sex" value="男">男
                            <input type="radio" class="sex" name="sex" value="女">女
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" id="register" class="btn" name="register" value="注册">
                            <input type="reset" id="reset" class="btn" name="reset" value="重置">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" >
                            	已有账号，<a href="login.php">登录</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>