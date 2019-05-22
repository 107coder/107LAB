<html>

<head>
    <title>
        第三次考核作业
    </title>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/3.js"></script>
    <link href="./css/3.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="float" onmouseover="clearInterval(interval)" onmouseout="interval = setInterval('changePos()', delay)">
        <img src="./images/dada.png">
    </div>
    <script>
        var xPos = 300;
        var yPos = 200;
        var step = 1;
        var delay = 30;
        var height = 0;
        var Hoffset = 0;
        var Woffset = 0;
        var yon = 0;
        var xon = 0;
        var pause = true;
        var interval;
        float.style.top = yPos;
        function changePos() {
            width = document.body.clientWidth;
            height = document.body.clientHeight;
            Hoffset = float.offsetHeight;
            Woffset = float.offsetWidth;
            float.style.left = xPos + document.body.scrollLeft;
            float.style.top = yPos + document.body.scrollTop;
            if (yon) { yPos = yPos + step; }
            else { yPos = yPos - step; }
            if (yPos < 0) { yon = 1; yPos = 0; }
            if (yPos >= (height - Hoffset)) { yon = 0; yPos = (height - Hoffset); }
            if (xon) { xPos = xPos + step; }
            else { xPos = xPos - step; }
            if (xPos < 0) { xon = 1; xPos = 0; }
            if (xPos >= (width - Woffset)) { xon = 0; xPos = (width - Woffset); }
        }
        function start() {
            float.visibility = "visible";
            interval = setInterval('changePos()', delay);
        }
        function pause_resume() {
            if (pause) {
                clearInterval(interval);
                pause = false;
            }
            else {
                interval = setInterval('changePos()', delay);
                pause = true;
            }
        }
        start();
    </script>
    <div class="other">
        <pre>设为首页 | 加入收藏</pre>
    </div>
    <div class="top-title">
        <a>
            <img src="./images/ICON.png" alt="计算机与信息工程心理健康教育工作">
        </a>
    </div>
    <div class="banner">
        <ul class="banner_1">
            <li>首页</li>
            <li>关于我们
                <ul class="banner_2">
                    <li>
                        <a href="2.php">中心简介</a>
                    </li>
                    <li>服务内容</li>
                    <li>师资队伍</li>
                </ul>
            </li>

            <li>新闻公告
                <ul class="banner_2">
                    <li>中心动态</li>
                    <li>学院风采</li>
                    <li>朋辈成长</li>
                    <li>教师园地</li>
                </ul>
            </li>
            <li>心理百科
                <ul class="banner_2">
                    <li>心理常识</li>
                    <li>最新发现</li>
                </ul>
            </li>

            <li>心理保健
                <ul class="banner_2">
                    <li>情感美文</li>
                    <li>开心一刻</li>
                </ul>
            </li>


            <li>心理咨询
                <ul class="banner_2">
                    <li>咨询常识</li>
                    <li>药品指南</li>
                </ul>
            </li>
            <li>心理测评
                <ul class="banner_2">
                    <li>心灵普查</li>
                    <li>趣味检测</li>
                    <li>专业问卷</li>
                </ul>
            </li>
            <li>专题活动</li>
            <li>下载中心</li>
            <li>我要留言</li>
        </ul>
    </div>
    <div class="banner-image">
        <ul class="image-container">
            <li>
                <img src="./images/image1.jpg">
            </li>
            <li>
                <img src="./images/image2.jpg">
            </li>
            <li>
                <img src="./images/image3.jpg">
            </li>
            <li>
                <img src="./images/image4.jpg">
            </li>
        </ul>
        <ol>
            <li class="current_2"></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
        <img src="./images/prev.png" class="prev">
        <img src="./images/next.png" class="next">
    </div>
    <div class="content">
        <div class="content-top">
            <div class="announce-image">
                <ul>
                    <li>
                        <img src="./images/news_image1.jpg">
                    </li>
                    <li>
                        <img src="./images/news_image2.jpg">
                    </li>
                </ul>
                <ol>
                    <li class="current_3">1</li>
                    <li><a>2</a> </li>
                </ol>
            </div>
            <div class="announce">
                <a href="1.php">新闻公告</a>
                
                 <center>
			
			    <table>
				
				<?php
						require_once("NEWSdbconfig.php");
						
						$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
						mysqli_select_db($link,DBNAME);
						$sql = "select * from news order by  id,addtime desc";
						$result = mysqli_query($link,$sql);
						
					if ($result=mysqli_query($link,$sql)){
						while($row = mysqli_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>{$row['title']}</td>";
						echo "</tr>";
						}
						mysqli_free_result($result);
					}
					
						mysqli_close($link);
				?>
			</table>
		</center>
			
            </div>
        </div>
        <div class="content-bottom">
            <div class="center">
                <div class="span">
                    <span>中心简介</span>
                </div>
                <div class="center-introduce">
                <table>
				<?php
						
						$link = @mysqli_connect('localhost','root','chenzhongju') or die("数据库连接失败！");
						mysqli_select_db($link,'introduce');
						$sql = "select * from content";
						$result = mysqli_query($link,$sql);	
					if ($result=mysqli_query($link,$sql)){
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr>";
							echo "<td>{$row['content']}</td>";
							echo "</tr>";
						}
						mysqli_free_result($result);
					}
					
						mysqli_close($link);
                ?>
                </table>
                    <a href="">详细</a>
                </div>
            </div>
            <div class="tab">
                <div>
                    <ul class="tab-title">
                        <li class="tab-click"><a>心理百科</a></li>
                        <li><a>心理保健</a></li>
                        <li><a>心理咨询</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <ul class="tab-content2">
                        <li><img src="./images/list_tabicon.png"><a href="">春季常见十种异常心理</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">一张图分清抑郁症和抑郁情绪</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">无论你说什么都会否定你的人，都是什么心态？</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">焦虑的本质是对失控的恐惧 | 如何克服你的焦虑？</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">失眠的背后，也许是对关系的渴望</a></li>
                    </ul>
                    <ul style="display:none" class="tab-content2">
                        <li><img src="./images/list_tabicon.png"><a href="">百合花开</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">愿你纵马天涯，归来仍满身豪情</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">爱，是遥远而咫尺的距离（散文诗）</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">有一种幸福叫“平平安安”</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">认识自己和他人 </a></li>
                    </ul>
                    <ul style="display:none" class="tab-content2">
                        <li><img src="./images/list_tabicon.png"><a href="">心理咨询的过程</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">心理咨询的分类和形式</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">心理咨询与心理治疗的关系</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">心理咨询与治疗的注意事项</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">心理疾病的药物常识及其注意事项</a></li>
                    </ul>
                </div>
            </div>
            <div class="down">
                <div class="down-title"><a>下载中心</a></div>
                <div class="down-content">
                    <ul>
                        <li><img src="./images/list_tabicon.png"><a href="">初始转介记录单(转介至心理中心)</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">个体心理咨询协议书</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">瑞格智能身心反馈训练系统...</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">向校外转介学生辅导员联系书</a></li>
                        <li><img src="./images/list_tabicon.png"><a href="">心理危机学生报表</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="foot">

        <pre class="pre1">河南大学计算机与信息工程学院心理健康教育工作站  地址：河南大学计算机与信息工程学院101</pre>
        <br>
        <pre>电话：0371-23883169  邮编：475000</pre>
        <div id="to_top"><a class="display">返回顶部</a><img src="./images/timg.jpg" style="width:40px;height:45px"
                class="none"></div>
    </div>

    <script>
        window.onload = function () {
            var oTop = document.getElementById("to_top");
            var screenw = document.body.clientWidth;
            var screenh = document.body.clientHeight;
            window.onscroll = function () {
                var scrolltop = document.body.scrollTop;
            }
            oTop.onclick = function () {
                document.body.scrollTop = 0;
            }
        }

    </script>
</body>

</html>