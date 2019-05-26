<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/index.css">
    <meta charset="UTF-8">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/lz3.js" ></script>
    <title>test3</title>
</head>
<body>
    <div id="blank">
        <div id="tex">
            <p>设为首页  ｜  加入收藏</p>
        </div>
    </div>

    <div id="title">
        <img src="../images/ICON.png" width="52%">
    </div>

    <div id="menu">
        <div id="menu1">
        <ul>
            <li id="menug0"><a href="#">首页</a></li>
            <li id="menua0">
                <a href="#">关于我们</a>
                <ul id="menua">
                    <li><a href="#">中心简介</a></li>
                    <li><a href="#">服务内容</a></li>
                    <li><a href="#">师资队伍</a></li>
                </ul>
            </li>
            <li id="menub0">
                <a href="#">新闻公告</a>
                <ul id="menub">
                    <li><a href="#">中心动态</a></li>
                    <li><a href="#">学员风采</a></li>
                    <li><a href="#">朋辈成长</a></li>
                    <li><a href="#">教师园地</a></li>
                </ul>
            </li>
            <li id="menuc0">
                <a href="#">心理百科</a>
                <ul id="menuc">
                    <li><a href="#">心理常识</a></li>
                    <li><a href="#">最新发现</a></li>
                </ul>
            </li>
            <li id="menud0">
                <a href="#">心理保健</a>
                <ul id="menud">
                    <li><a href="#">情感美文</a></li>
                    <li><a href="#">开心一刻</a></li>
                </ul>
            </li>
            <li id="menue0">
                <a href="#">心理咨询</a>
                <ul id="menue">
                    <li><a href="#">咨询常识</a></li>
                    <li><a href="#">药品指南</a></li>
                </ul>
            </li>
            <li id="menuf0">
                <a href="#">心理测评</a>
                <ul id="menuf">
                    <li><a href="#">心灵普查</a></li>
                    <li><a href="#">趣味检测</a></li>
                    <li><a href="#">学业问卷</a></li>
                </ul>
            </li>
            <li id="menuh0"><a href="#">专题活动</a></li>
            <li id="menui0"><a href="#">下载中心</a></li>
            <li id="menuj0"><a href="#">我要留言</a></li>
        </ul>
        </div>
    </div>

    <div id="jianjie">
        <div id="abc"></div>
        <?php
					//1.导入配置文件
						require("newsdbconfig.php");
						
					//2.连接mysqli，选择数据库
						$link2 = @mysqli_connect(HOST2,USER2,PASS2) or die("数据库连接失败！");
                        mysqli_select_db($link2,DBNAME2);
                        mysqli_set_charset($link2,'utf8');
                        $id = $_GET['id'];
					//3. 执行查询，并返回结果集
						$sql2 = "select * from news where id=$id";
						$result = mysqli_query($link2,$sql2);
						$row = mysqli_fetch_assoc($result);
					//4. 解析结果集,并遍历输出
							echo "<tr height=30>";
							echo "<td>{$row['content']}. </td>";
							echo "</tr>";

					//5. 释放结果集
						mysqli_free_result($result);
						mysqli_close($link2);
				?>
        <div id="head"><?php  
        echo "<tr height=30>";
        echo "<td>{$row['title']}</td>";
        echo "</tr>";
        ?>
        </div>
             <li>&nbsp;</li>
             <li>&nbsp;</li>
             <li>&nbsp;</li>
             <li>&nbsp;</li>
        <a>详情:</a>
        <table width="625" border="0">
				
				
				
			</table>
    </div>



    <div id = "bottom"></div>
    <div id = "tel">
        <li>河南大学计算机与信息工程学院心理健康教育工作站  地址：河南大学计算机与信息工程学院101</li>
        <li>电话：0371-23883169  邮编：475000</li>
    </div>