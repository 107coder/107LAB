
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="第三次作业js/jquery1.js"></script>
		<script type="text/javascript" src="第三次作业js/new_file.js"></script>
		<link rel="stylesheet" href="第三次作业css/new_file.css"/>	
		<title></title>
	</head>
	<body>
		<!-- <script type="text/javascript">alert($) </script> 检测外联jq是否成功-->
		<div class="all" style="width: 1600px;height: 1000px;">
			<div class="heade"style="overflow: hidden;">
				<span>设为首页&nbsp;&nbsp;|&nbsp;&nbsp;加入收藏</span>
			</div>
			<div class="heade1"style="overflow: hidden;">
				<img href="http://cs.henu.edu.cn/heart/index.html" src="images/ICON.png" />
			</div>
			<div class="heade3"style="width: 1600px;">
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<ul style="width: 1600px;">
					
					<li class="current1">&nbsp;&nbsp;&nbsp;首页&nbsp;&nbsp;&nbsp;</li>
					<li >关于我们
					 <ol style="display: none;">
						<li ><a href="./new_file.php">中心介绍</a></li>
						<li>师资团队</li>
						<li >服务内容</li>
					</ol> 
					</li>
					<li>新闻公告
					<ol style="display: none;">
						<li>中心动态</li>
						<li>学院风采</li>
						<li>朋辈成长</li>
						<li>教师园地</li>
					</ol>
					</li>
					<li>心理百科
					<ol style="display: none;">
						<li>心理常识</li>
						<li>最新发现</li>
					</ol></li>
					<li>心理保健
					 <ol style="display: none;">
						<li>情感美文</li>
						<li>开心一刻</li>
					</ol></li>
					<li>心理咨询
					<ol style="display: none;">
						<li>咨询常识</li>
						<li>药品指南</li>
					</ol></li>
					<li>心理评测
					 <ol style="display: none;">
						<li>心灵普查</li>
						<li>趣味检测</li>
						<li>专业问卷</li>
					</ol></li>
					<li>专题活动</li>
					<li>下载中心</li>
					<li>我要留言</li>
				</ul>
			</div>
			<div class="tu"> 
				<div class="tu1">
					<img src="images/image1.jpg" />
					<img src="images/image2.jpg" />
					<img src="images/image3.jpg" />
					<img src="images/image4.jpg" />
					<img src="images/image1.jpg" /> 
				</div>
				<ul class="test">
					<li class="current"></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			 <div class="tp-content1"></div>
			 <div class="boday1">
				 <div class="content-tu">
					 <div class="content-tu1">
					 <img src="images/news_image1.jpg" />
					 <img src="images/news_image2.jpg"/>
					 </div>		 
				 
				 <ul class="content-tu2">
						 <li class="current2">1</li>
						 <li>2</li>
					 </ul>
					 </div>
				 <div class="content-ziti">
					 <span><a href="./新闻.php">新闻公告</a></span>
					 <div class="content-ziti1"></div>
					 <div class="content-ziti2">
					 <?php
					 
					 
					//  header('content-type:image/jpeg');
				//1.连接MySQL，选择数据库
					 $passwordc='';
					 $userss='root';
					 $loaddd='localhost';
					 $link = @mysqli_connect($loaddd,$userss,$passwordc) or die("数据库连接失败！");
					 mysqli_select_db($link,'liuzihan');
					 mysqli_set_charset($link, "utf8");
					 //mysql_query("set names 'utf8'");
					  //2. 执行查询，并返回结果集
					 $sql = "select keywords,toptop from news where toptop=1";
					 $results = mysqli_query($link,$sql);
					 //$row=mysqli_fetch_array($results, MYSQLI_NUM);
					 while(@$row=mysqli_fetch_array($results,MYSQLI_NUM)){
						$rows[]=$row;
						//foreach($rows as $key)
					}
					//var_dump($rows);
					 $total=mysqli_num_rows($results);
					 //-------------------------------------
					 $sql1 = "select keywords,toptop from news where toptop=0";
					 $resultss = mysqli_query($link,$sql1);
					 while(@$row0=mysqli_fetch_array($resultss,MYSQLI_NUM)){
						$rows0[]=$row0;
					 }
					 $total0=mysqli_num_rows($resultss);
					//  $total1=result(1);
					//  $total0=result(0);


					 for($i=1;$i<=$total;$i++)					 
					//  echo "<p><img src=".'images/list_icon.png'>&nbsp<a href='javsscript:;'> '{$rows[$total-$i][0]}'</a></p>";
					 echo '<p><img src='.'images/list_icon.png'.">&nbsp;<a href=".$rows[$total-$i][1].">".$rows[$total-$i][0].'&nbsp;&nbsp;'."<img src=".'images/hot.gif'."></p>";					 
					 for($j=1;$j<=7-$total;$j++)
					 echo '<p><img src='.'images/list_icon.png'.">&nbsp;<a href=".$rows0[$total0-$j][1].">".$rows0[$total0-$j][0]."</a></p>";
					/*<p><img src="images/list_icon.png">&nbsp;<a href="javsscript:;"><?php  echo "{$rows[$total-3][0]}";?></a></p>
					 <p><img src="images/list_icon.png">&nbsp;<a href="javsscript:;"><?php  echo "{$rows[$total-4][0]}";?></a></p>
					 <p><img src="images/list_icon.png">&nbsp;<a href="javsscript:;"><?php  echo "{$rows[$total-5][0]}";?></a></p>
					 <p><img src="images/list_icon.png">&nbsp;<a href="javsscript:;"><?php  echo "{$rows[$total-6][0]}";?></a></p>
					 <p><img src="images/list_icon.png">&nbsp;<a href="javsscript:;"><?php  echo "{$rows[$total-7][0]}";?></a></p>
					 <p><img src="images/list_icon.png">&nbsp;<a href="javsscript:;"><?php  echo "{$rows[$total-8][0]}";?></a></p>*/
					 mysqli_close($link);
					 ?>
					 </div>
				 </div>
			 </div>
			 <div class="bottom1">
				 <span>中心简介</span>
				 <div class="bottom1-content"></div>
				 <p>&nbsp;&nbsp;&nbsp;&nbsp;计算机与信息工程学院心理健康教育工作站始建于2015年3月，在学院101办公室，占地面积50平方米。工作站领导小组由学院党委副书记、各年级辅导员、年级朋辈辅导员组成。工作站宗旨以增强学生的心理素质为目的，以普及心理健康知识...<a href="new_file.php">详细</a></p>
			 </div>   
			 <div class="bottom2">
				 <div class="tabfirst">
				 <ul>
				 	<li class="current3">心理百科</li>
					<li>心理保健</li>
					<li>心理咨询</li>
				 </ul>
				 </div>
				 <div class="bottom2-content"></div>
				 <div class="tablast">
					 <div>
						 <p><img src="images/list_tabicon.png">春季常见十种异常心理</p>
						 <p><img src="images/list_tabicon.png">一张图分清抑郁症和抑郁情绪</p>
						 <p><img src="images/list_tabicon.png">无论你说什么都会否定你的人，都是什么心态？</p>
						 <p><img src="images/list_tabicon.png">焦虑的本质是对失控的恐惧 | 如何克服你的焦虑？</p>
						 <p><img src="images/list_tabicon.png">失眠的背后，也许是对关系的渴望</p>
					 </div>
					 <div style="display: none;">
						 <p><img src="images/list_tabicon.png">百合花开</p>
						 <p><img src="images/list_tabicon.png">愿你纵马天涯，归来仍满身豪情</p>
						 <p><img src="images/list_tabicon.png">爱，是遥远而咫尺的距离（散文诗）</p>
						 <p><img src="images/list_tabicon.png">有一种幸福叫“平平安安”</p>
						 <p><img src="images/list_tabicon.png">认识自己和他人</p>
					 </div>
					 <div style="display: none;">
						 <p><img src="images/list_tabicon.png">心理咨询的过程</p>
						 <p><img src="images/list_tabicon.png">心理咨询的分类和形式</p>
						 <p><img src="images/list_tabicon.png">心理咨询与心理治疗的关系</p>
						 <p><img src="images/list_tabicon.png">心理咨询与治疗的注意事项</p>
						 <p><img src="images/list_tabicon.png">心理疾病的药物常识及其注意事项</p>
					 </div>
				 </div>
			 </div>
			<div class="bottom3">
				<span>下载中心</span>
				<div class="bottom3-content"></div>
				<p><img src="images/list_tabicon.png">初始转介记录单(转介至心理中心)</p>
				<p><img src="images/list_tabicon.png">个体心理咨询协议书</p>
				<p><img src="images/list_tabicon.png">瑞格智能身心反馈训练系统--训练...</p>
				<p><img src="images/list_tabicon.png">向校外转介学生辅导员联系书</p>
				<p><img src="images/list_tabicon.png">心理危机学生报表</p>
			</div>
			<div class="last1"></div>
			<div class="last">
				<p>河南大学计算机与信息工程学院心理健康教育工作站&nbsp;&nbsp;&nbsp;  地址：河南大学计算机与信息工程学院101</p>
				<p>电话：0371-23883169  &nbsp;&nbsp;邮编：475000</p>
			</div>
			<div class="top">
				<div class="top1"><img src="images/2.jpg"/></div>
				<div class="top2"><p>返回顶部</p></div>
			</div>
			<div id="fudong"><img src="images/favicon.ico"></div>
		</div>
	</body>
	<script>
var xPos = 20;
var yPos = 0;
var step = 2;
var delay = 30;
var height = 0;
var Hoffset = 0;
var Woffset = 0;
var yon = 0;
var xon = 0;
var pause = true;
var interval;
fudong.style.top = yPos + "px";
function changePos() {
width = document.body.clientWidth;
height = document.body.clientHeight;
Hoffset = fudong.offsetHeight;
Woffset = fudong.offsetWidth;
fudong.style.left = xPos + document.body.scrollLeft + "px";
fudong.style.top = yPos + document.body.scrollTop + "px";
if (yon) {
yPos = yPos + step;
}
else {
yPos = yPos - step;
}
if (yPos < 0) {
yon = 1;
yPos = 0;
}
if (yPos >= (height - Hoffset)) {
yon = 0;
yPos = (height - Hoffset);
}
if (xon) {
xPos = xPos + step;
}
else {
xPos = xPos - step;
}
if (xPos < 0) {
xon = 1;
xPos = 0;
}
if (xPos >= (width - Woffset)) {
xon = 0;
xPos = (width - Woffset);
}
}
function start() {
fudong.style.visibility = "visible";
interval = setInterval(changePos,100)
}
start();
fudong.onmouseover = function(){
	clearInterval(interval)
}
fudong.onmouseout = function(){
	interval = setInterval(changePos,1000/6)
}
</script>
</html>
