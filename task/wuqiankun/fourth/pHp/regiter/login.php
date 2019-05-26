<?php
    session_start();
    if(empty($_COOKIE['username'])&&empty($_COOKIE['password'])){
        if(isset($_SESSION['username']))
            echo "登录成功，欢迎您".$_SESSION['username'];
        else
            echo "你还没有登录，<a href='login.php'>请登录</a>";
            }
    else
        echo "登录成功，欢迎您：".$_COOKIE['username'];

?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>后台管理系统登录</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="login">
            <div class="loginmain">
                <h4>登录管理系统</h4>
                <form action="checkcode.php" method="post">
                    
                    <ul>
                        <li>
                            <span>管理员账号：</span>
                            <input type="text" name="username" value="">
                        </li>
                        <li>
                            <span>管理员密码：</span>
                            <input type="password" name="password" value="">
                        </li>
                        <li class="verify_t">
                            <span>登录验证码：</span>
                            <input type="text" name="captcha" value="">
                            <img src="code2.php" alt="" id="code_img">
                            <a href="" id="change">看不清，换一张</a>
                        </li>
                    
                        <li class="verify_f">
                            <!--<a href="../../manage/index_.php">-->
                            <input type="submit" name="loginbtn" value="登录">
                            
                            <span id="text"></span>
                        </li>
                    </ul>
                
                </form>
            </div>
        </div>

        <script type="text/javascript" src="../../js-jquire/jquery-3.3.1.min.js"></script>
        <script>
            /*$(function () {
                
                //表单验证
                $('input[name="loginbtn"]').click(function(event) {
                    var $name = $('input[name="username"]');
                    var $password = $('input[name="password"]');
                    var $verify = $('input[name="verify"]');
                    var $text = $('#text');
                    var _name = $.trim($name.val());
                    var _password = $.trim($password.val());
                    var _verify = $.trim($verify.val());

                    if('' == _name){
                        $text.text('请输入用户名！');
                        $name.focus();
                        return;
                    }
                    if('' == _password){
                        $text.text('请输入密码！');
                        $password.focus();
                        return;
                    }
                    if('' == _verify){
                        $text.text('请输入验证码！');
                        $verify.focus();
                        return;
                    }

                    $text.text('登录成功，请稍候！');

                });
            });*/
            var change = document.getElementById("change");

	        var img = document.getElementById("code_img");

	        change.onclick = function()

	        {

		        img.src="code2.php?t="+new Date();//增加一个随机参数，防止图片缓存

		        return false;//阻止超链接的跳转动作

	        }
        </script>      
    </body>
</html>