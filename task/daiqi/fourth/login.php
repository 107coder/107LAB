<?php
include_once 'tools.php';
session_start();
$link=mysqli_connect('localhost','root','','php');
if(is_login($link)){
    skip('member.php', '您已经登录，请不要重复登录！');
}
if(isset($_POST['submit'])){
    $query="select * from general_user where name='{$_POST['name']}' and password='{$_POST['password']}'";
    $result=mysqli_query($link, $query);
    if(mysqli_num_rows($result)==1){
        $data=mysqli_fetch_assoc($result);
        $_SESSION['manage']['name']=$data['name'];
        $_SESSION['manage']['password']=$data['password'];
        $_SESSION['manage']['sex']=$data['sex'];
        $_SESSION['manage']['level']=$data['level'];
        skip("member.php?name='{$data['name']}'", '');
    }else{
        skip('login.php', '登录失败！用户名或密码错误，请重试！');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>登录</title>
<meta name="content-type" charset="UTF-8">
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
        <h1>登录页面</h1>
        </div>
        <!--中部-->
        <div id="middle">
            <form method="post">
                <table>
                    <tr>
                        <td>用户名：</td>
                        <td>
                            <input type="text" id="name" name="name" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>密&nbsp;&nbsp;&nbsp;码：</td>
                        <td><input type="password" id="password" name="password" required="required"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="font-size:20px;margin:auto;">
                            <input type="checkbox"  id="check" name="remember" >记住我
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" id="login" class="btn" name="submit" value="登录">
                            <input type="reset" id="reset" class="btn" name="reset" value="重置">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" >
                            	没有账号，<a href="registermain.php">注册</a>
                        </td>
                    </tr>
                </table>
            </form>
       		</div>
       </div>
</body>
</html>
