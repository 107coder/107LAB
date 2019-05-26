<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>后台管理系统</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"
    </head>
    <body>
        
        <div class="head clearfix">
            <div class="headlogo left">
                <h2><a href="#">后台系统管理</a></h2>
            </div>
            <ul class="headnav left" id="headnav">
                <li id="menu_0" class="current-menu">
                    <a href="#">菜单管理</a>
                </li>
                <li id="menu_1">
                    <a href="#">模块管理</a>
                </li>
                <li id="menu_2">
                    <a href="#">系统设置</a>
                </li>
                <li id="menu_3">
                    <a href="#">扩展管理</a>
                </li>
            </ul>
            <ul class="headlink right clearfix">
                <li id="link_0">
                    <a href="#">
                    <?php
                        session_start();
                        if(empty($_COOKIE['username'])&&empty($_COOKIE['password'])){
                            if(isset($_SESSION['username']))
                                echo "登录成功，欢迎您".$_SESSION['username'];
                            else
                                echo "你还没有登录，<a href='login.html'>请登录</a>";
                                }
                        else
                            echo "登录成功，欢迎您：".$_COOKIE['username'];

                        ?>
                    </a>
                </li>
                <li id="link_1">
                    <a href="#">隐藏菜单</a>
                </li>
                <li id="link_2">
                    <a href="../107-3.html" target = "_blank">首页</a>
                </li>
                <li id="link_3">
                    <a href="#">帮助</a>
                </li>
                <li id="link_4">
                    <a href="../pHp/regiter/loginout.php">退出</a>
                </li>
            </ul>
        </div><!--end head-->
        
        <div class="leftmenu" id="leftmenu">
            <div id="leftmenu_0" class="leftmenu-item">
                <dl>
                    <dt>栏目管理</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="javascript:;">栏目管理</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl>
                    <dt>内容管理</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="javascript:;" _link = "../pHp/center/center.php">中心简介</a></li>
                            <li><a href="javascript:;" _link = "../pHp/index.php">新闻管理</a></li>
                        </ul>
                    </dd>
                </dl>
            </div><!--end leftmenu_0-->

            <div id="leftmenu_1" class="leftmenu-item" style="display:none;">
                <dl>
                    <dt>内置模块</dt>
                    <dd>
                        <ul class="clearfix">
                            
                            <li><a href="javascript:;">专题管理</a></li>
                            <li><a href="javascript:;">公告管理</a></li>
                            <li><a href="javascript:;">友情链接</a></li>
                            <li><a href="javascript:;">留言管理</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl>
                    <dt>其它模块</dt>
                    <dd>
                    </dd>
                </dl>
            </div><!--end leftmenu_1-->

            <div id="leftmenu_2" class="leftmenu-item" style="display:none;">
                <dl>
                    <dt>管理员管理</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="javascript:;" _link = "../pHp/manage-admin/superadmins/superadmins.php">系统超级用户管理</a></li>
                            <li><a href="javascript:;" _link = "../pHp/manage-admin/orgadmins/admins.php">普通用户组管理</a></li>
                        </ul>
                    </dd>
                </dl>
            </div><!--end leftmenu_2-->

            <div id="leftmenu_3" class="leftmenu-item" style="display:none;">
                <dl>
                    <dt>我的账户</dt>
                    <dd>
                        <ul class="clearfix">
                            <li><a href="javascript:;">修改我的信息</a></li>
                            <li><a href="javascript:;">修改密码</a></li>
                        </ul>
                    </dd>
                </dl>
            </div><!--end leftmenu_3-->

        </div>

        <div class="rightmain">
            <div class="rightcontent">
                <iframe id="main" name="main" frameborder="0" scrolling="yes" src=""></iframe>
            </div>
        </div>

        <!--JavaScript代码-->
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript">

            $(function(){
                $('#headnav li').click(function(){
                    var _id = $(this).index();
                    //alert(_id);
                    
                     //主导航与左侧导航关联
                    $(this).addClass('current-menu').siblings().removeClass('current-menu');
                    $('#leftmenu').find('.leftmenu-item').eq(_id).css('display','block').siblings('.leftmenu-item').css('display','none');    
                });

                $('#link_1').click(function(){
                    if(false == $('#leftmenu').is(':visible')){
                        $('#leftmenu').css('display','block');
                        $(this).children('a').text('隐藏菜单');
                        $('body').addClass('showleftmenu').removeClass('hideleftmenu')
                    }else {
                        $('#leftmenu').css('display','none');
                        $(this).children('a').text('显示菜单');
                        $('body').addClass('hideleftmenu').removeClass('showleftmenu')
                    }
                });

                var d = true;

                $('#leftmenu dl dt').click(function(){
                    // if(false == $(this).siblings('dd').is(':visible')){
                    //     $(this).css('background-position','right 12px');
                    // }else {
                    //     $(this).css('background-position','right -40px');
                    // }
                    $(this).siblings('dd').slideToggle('fast');//.siblings('dt').css('background-position','right -40px');
                    if(d == true){
                        $(this).css('background-position','right -40px');
                        d = false;
                    }else {
                        $(this).css('background-position','right 12px');
                        d = true;
                    }
                });
                
                //左侧菜单切换
                $('#leftmenu dl dd ul li a').click(function(){
                    var _link = $(this).attr('_link');
                    $('#main').attr('src', _link);
                    $(this).addClass('current-menuleft').parent().siblings().children().removeClass('current-menuleft');
                    $(this).parents('dl').siblings().find('dd ul li a').removeClass('current-menuleft');
                });

            });
        </script>

    </body>
</html>