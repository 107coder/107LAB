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

        <div id="head">心理健康教育工作站简介</div>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;计算机与信息工程学院心理健康教育工作站始建于2015年3月，在学院101办公室，占地面积50平方米。 
            工作站领导小组由学院党委副书记、各年级辅导员、年级朋辈辅导员组成。
             工作站宗旨以增强学生的心理素质为目的，以普及心理健康知识，帮助学生解除心理困扰，增强心理适应能力，努力开发个人潜能， 
             促进学生全面成长为宗旨，组织开展面向全院学生的心理健康教育的相关活动。</p>
             <li>&nbsp;</li>
             <li>&nbsp;</li>
             <li>&nbsp;</li>
             <li>&nbsp;</li>
        <a>工作范围:</a>
        <!-- <ul>
            <li>1.随时接受同学们的咨询，并对咨询对象进行适当辅导。</li>
            <li>2.为学院学生在生活、学习、情感等方面解惑答疑。</li>
            <li>3.定期开展心理健康知识宣传普及活动。</li>
            <li>4.建立和整理学生心理健康档案，定期对重点关注的学生进行摸底排查。</li>
            <li>5.定期参加学校心理培训，组织内部成员学习和交流。</li>
            <li>6.指导各班心理委员收集资料，并对重点关注学生定期跟踪记录，发现有严重心理问题的学生及时逐级上报，经批准后方能进行干预。</li>
        </ul> -->
        <table width="625" border="0">
				
				
				<?php
					//1.导入配置文件
						require("newsdbconfig.php");
						
					//2.连接mysqli，选择数据库
						$link2 = @mysqli_connect(HOST2,USER2,PASS2) or die("数据库连接失败！");
                        mysqli_select_db($link2,DBNAME2);
                        mysqli_set_charset($link2,'utf8');
						
					//3. 执行查询，并返回结果集
						$sql2 = "select * from introduction order by addtime desc";
						$result = mysqli_query($link2,$sql2);
						
					//4. 解析结果集,并遍历输出 <img src="images/list_icon.png" width="26px">
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr height=30>";
							echo "<td>{$row['id']}. </td><td>{$row['title']}</td>";
							echo "</tr>";
						}
					//5. 释放结果集
						mysqli_free_result($result);
						mysqli_close($link2);
				?>
			</table>
    </div>



    <div id = "bottom"></div>
    <div id = "tel">
        <li>河南大学计算机与信息工程学院心理健康教育工作站  地址：河南大学计算机与信息工程学院101</li>
        <li>电话：0371-23883169  邮编：475000</li>
    </div>