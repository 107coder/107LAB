
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/index.css">
    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/index.js" ></script>
    <title>test4</title>
</head>
<table width="1%">
    <tr><td>
<body>
        <div id="float" onmouseover="clearInterval(interval)" onmouseout="interval = setInterval('changePos()', delay)" >
            I love programme
        </div>
    <div id="blank">
        <div id="tex">
            <p>设为首页 ｜ 加入收藏 ｜ <a href="login.php">登录</a></p>
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
                    <li><a href="introduction.php">中心简介</a></li>
                    <li><a href="#">服务内容</a></li>
                    <li><a href="#">师资队伍</a></li>
                </ul>
            </li>
            <li id="menub0">
                <a href="列表页.php">新闻公告</a>
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

    <div class="box" id="box">
        <div class="inner">

            <ul>
                <li><img src="../images/image1.jpg" alt=""></li>
                <li><img src="../images/image2.jpg" alt=""></li>
                <li><img src="../images/image3.jpg" alt=""></li>
                <li><img src="../images/image4.jpg" alt=""></li>
            </ul>
     
            <ol class="bar">
     
            </ol>
            <div id="arr">
                        <span id="left">
                            <
                        </span>
                <span id="right">
                            >
                        </span>
            </div>

        </div>
    </div>


    <div id="news">

                    <div id="main_div">
                 
                        <ul class="ul_img">
                              <li class="li_img"><img src="../images/news_image1.jpg"></li>
                              <li class="li_img"><img src="../images/news_image2.jpg"></li>
                        </ul>

            <div class="posi">
                <div class="div_btn">1</div>
                <div class="div_btn">2</div>
       </div>
         </div>


        <div id="xw">
            <table width="625" border="0">
				<tr height="48">
					<td><a href="list.php">新闻公告</a></td>
				</tr>
				
				<?php
					//1.导入配置文件
						require("newsdbconfig.php");
						
					//2.连接mysqli，选择数据库
						$link2 = @mysqli_connect(HOST2,USER2,PASS2) or die("数据库连接失败！");
						mysqli_select_db($link2,DBNAME2);
						mysqli_set_charset($link2,'utf8'); 
						
					//3. 执行查询，并返回结果集
						$sql2 = "select * from news order by addtime desc";
						$result = mysqli_query($link2,$sql2);
						
					//4. 解析结果集,并遍历输出 <img src="images/list_icon.png" width="26px">
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr height=30>";
							echo "<td><a href='list.php'>{$row['title']}</a></td>";
							echo "</tr>";
						}
					//5. 释放结果集
						mysqli_free_result($result);
						mysqli_close($link2);
				?>
			</table>
        </div>
        
    </div>

    <div id = "tab0">
        <div id="tab1">
            <span id="tit" href="#">中心简介</span>
            <div id="line"></div>
            <div id="blank1"></div>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;计算机与信息工程学院心理健康教育工作站始建于2015年3月，在学院101办公室，占地面积50平方米。
                工作站领导小组由学院党委副书记、各年级辅导员、年级朋辈辅导员组成。
                工作站宗旨以增强学生的心理素质为目的，以普及心理健康知识...<a href="#">详情</a></p>
        </div>

        <div id="tab2">

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
                                <li><img src="../images/list_tabicon.png"><a href="">春季常见十种异常心理</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">一张图分清抑郁症和抑郁情绪</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">无论你说什么都会否定你的人，都是什么心态？</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">焦虑的本质是对失控的恐惧 | 如何克服你的焦虑？</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">失眠的背后，也许是对关系的渴望</a></li>
                            </ul>
                            <ul style="display:none" class="tab-content2">
                                <li><img src="../images/list_tabicon.png"><a href="">百合花开</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">愿你纵马天涯，归来仍满身豪情</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">爱，是遥远而咫尺的距离（散文诗）</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">有一种幸福叫“平平安安”</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">认识自己和他人 </a></li>
                            </ul>
                            <ul style="display:none" class="tab-content2">
                                <li><img src="../images/list_tabicon.png"><a href="">心理咨询的过程</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">心理咨询的分类和形式</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">心理咨询与心理治疗的关系</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">心理咨询与治疗的注意事项</a></li>
                                <li><img src="../images/list_tabicon.png"><a href="">心理疾病的药物常识及其注意事项</a></li>
                            </ul>
                        </div>
                    </div>
        


        </div>

        <div id="tab3">
            <span id="tit" href="#">下载中心</span>
            <div id="line"></div>
            <div id="blank1"></div>
            <li>
                <img src="../images/list_tabicon.png" width="20px">
                <a href="#">初始转介记录单(转介至心理中心)</a>
            </li>
            <li>    
                <img src="../images/list_tabicon.png" width="20px">
                <a href="#">个体心理咨询协议书</a>
            <li>
                <img src="../images/list_tabicon.png" width="20px">
                <a href="#">瑞格智能身心反馈训练系统--训练中心的使...</a>
            </li>
            </li>
                <img src="../images/list_tabicon.png" width="20px">
                <a href="#">向校外转介学生辅导员联系书</a>
            <li>   
                <img src="../images/list_tabicon.png" width="20px">
                <a href="#">心理危机学生报表</a>
            </li>
        </div>
    </div>

    <div id = "bottom"></div>
    <div id = "tel">
        <li>河南大学计算机与信息工程学院心理健康教育工作站  地址：河南大学计算机与信息工程学院101</li>
        <li>电话：0371-23883169  邮编：475000</li>
    </div>
    <div id = "totp">
        <a href="#">返回顶部</a>
	</div>
    </td></tr>
    </table>
    <script>
function my$(id) { return document.getElementById(id); }
           
        var box = my$("box");
        var inner = box.children[0];
        var ulObj = inner.children[0];
        var list = ulObj.children;
        var olObj = inner.children[1];
        var arr = my$("arr");
        var imgWidth = inner.offsetWidth;
        var right = my$("right");
        var pic = 0;

        for (var i = 0; i < list.length; i++) {
            var liObj = document.createElement("li");
            olObj.appendChild(liObj);
            liObj.innerText = (i + 1);
            liObj.setAttribute("index", i);
    
            liObj.onmouseover = function () {
            
                for (var j = 0; j < olObj.children.length; j++) {
                    olObj.children[j].removeAttribute("class");
                }
                this.className = "current";
                pic = this.getAttribute("index");
                animate(ulObj, -pic * imgWidth);
            }
        }
  
        olObj.children[0].className = "current";
 
        ulObj.appendChild(ulObj.children[0].cloneNode(true));
        var timeId = setInterval(onmouseclickHandle, 3000);
   
        box.onmouseover = function () {
            arr.style.display = "block"; clearInterval(timeId);
        };
        box.onmouseout = function () {
            arr.style.display = "none"; timeId = setInterval(onmouseclickHandle, 3000);
        };
        right.onclick = onmouseclickHandle;
        function onmouseclickHandle() {
            if (pic == list.length - 1) {        
                pic = 0;
                      
                ulObj.style.left = 0 + "px";
                   
            } pic++;
               
            animate(ulObj, -pic * imgWidth);
            if (pic == list.length - 1) {      

                olObj.children[olObj.children.length - 1].className = "";
                olObj.children[0].className = "current";
            }
            else {       
                for (var i = 0; i < olObj.children.length; i++) { olObj.children[i].removeAttribute("class"); }
                olObj.children[pic].className = "current";
            }
        }
        left.onclick = function () {
            if (pic == 0) {
                pic = list.length - 1;
                ulObj.style.left = -pic * imgWidth + "px";
            }
            pic--;
            animate(ulObj, -pic * imgWidth);
            for (var i = 0; i < olObj.children.length; i++) {
                olObj.children[i].removeAttribute("class");
            }     
            olObj.children[pic].className = "current";
        };
        function animate(element, target) {
            clearInterval(element.timeId);       
            element.timeId = setInterval(function () {      
                var current = element.offsetLeft; 
                var step = 70;
                step = current < target ? step : -step;
                current += step;
                if (Math.abs(current - target) > Math.abs(step)) { element.style.left = current + "px"; } else {
                    clearInterval(element.timeId);    
                    element.style.left = target + "px";
                }
            }, 30);
        }


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
        function changePos() 
        {
            width = document.body.clientWidth;
            height = document.body.clientHeight;
            Hoffset = float.offsetHeight;
            Woffset =float.offsetWidth;
            float.style.left = xPos + document.body.scrollLeft;
            float.style.top = yPos + document.body.scrollTop;
            if (yon) 
                {yPos = yPos + step;}
            else 
                {yPos = yPos - step;}
            if (yPos < 0) 
                {yon = 1;yPos = 0;}
            if (yPos >= (height - Hoffset)) 
                {yon = 0;yPos = (height - Hoffset);}
            if (xon) 
                {xPos = xPos + step;}
            else 
                {xPos = xPos - step;}
            if (xPos < 0) 
                {xon = 1;xPos = 0;}
            if (xPos >= (width - Woffset)) 
                {xon = 0;xPos = (width - Woffset);   }
            }
            function start()
             {
              float.visibility = "visible";
                interval = setInterval('changePos()', delay);
            }
            function pause_resume() 
            {
                if(pause) 
                {
                    clearInterval(interval);
                    pause = false;}
                else 
                {
                    interval = setInterval('changePos()',delay);
                    pause = true; 
                    }
                }
            start();


            //小轮播
    var count = 0;
    var isgo = false;
    var timer;
    
    window.onload = function () {
        var ul_img = document.getElementsByClassName("ul_img")[0];
        var li_img = document.getElementsByClassName("li_img");
        var arrow = document.getElementsByClassName("arrow");
        var div_btn = document.getElementsByClassName("div_btn");
        div_btn[0].style.backgroundColor = "aqua";


        showtime();
        function showtime() {
            timer = setInterval(function () {
                if (isgo == false) {
                    count++;
                    ul_img.style.transform = "translate(" + -400 * count + "px)";
                    if (count >= li_img.length - 1) {
                        count = li_img.length - 1;
                        isgo = true;
                    }
                }
                else {
                    count--;
                    ul_img.style.transform = "translate(" + -400 * count + "px)";
                    if (count <= 0) {
                        count = 0;
                        isgo = false;
                    }
                }

                for (var i = 0; i < div_btn.length; i++) {
                    div_btn[i].style.backgroundColor = "aquamarine";
                }
                
                div_btn[count].style.backgroundColor = "aqua";
                
            }, 4000)
        }

        for (var i = 0; i < arrow.length; i++) {
            arrow[i].onmouseover = function () {
                clearInterval(timer);
            }
            arrow[i].onmouseout = function () {
                showtime();
            }
            arrow[i].onclick = function () {
                if (this.title == 0) {
                    count++;
                    if (count > 3) {
                        count = 0;
                    }
                }
                else {
                    count--;
                    if (count < 0) {
                        count = 3;
                    }
                }

                ul_img.style.transform = "translate(" + -800 * count + "px)";

                for (var i = 0; i < div_btn.length; i++) {
                    div_btn[i].style.backgroundColor = "aquamarine";
                }
                div_btn[count].style.backgroundColor = "aqua";
            }
        }

        for (var b = 0; b < div_btn.length; b++) {
            div_btn[b].index = b;
            div_btn[b].onmouseover = function () {

                clearInterval(timer);

                for (var a = 0; a < div_btn.length; a++) {
                    div_btn[a].style.backgroundColor = "aquamarine";
                }
                div_btn[this.index].style.backgroundColor = "aqua";
                if (this.index == 3) {
                    isgo = true;
                }
                if (this.index == 0) {
                    isgo = false;
                }
                count = this.index;
                ul_img.style.transform = "translate(" + -400 * this.index + "px)";
            }
            div_btn[b].onmouseout = function () {
                showtime();
            }
        }
    }
    </script>



</body>
</html>