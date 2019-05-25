<?php
include_once 'public.php';
head('计算机与信息工程学院心理工作站', 'frontstyle/index.css');
?>
<!--  banner start  -->
		<div id="banner">
			<ul class="image">
				<li><img src="frontstyle/imge/image1.jpg" /></li>
				<li><img src="frontstyle/imge/image2.jpg" /></li>
				<li><img src="frontstyle/imge/image3.jpg" /></li>
				<li><img src="frontstyle/imge/image4.jpg" /></li>
			</ul>
			<ol>
				<li class="dot"><img src="frontstyle/imge/image_dot.png" /></li>
				<li><img src="frontstyle/imge/image_dot.png" /></li>
				<li><img src="frontstyle/imge/image_dot.png" /></li>
				<li><img src="frontstyle/imge/image_dot.png" /></li>
			</ol>
		</div>
		<!--  banner end  -->

		<!--  content start  -->
		<div id="content">
			<div>
				<div class="content_img">
					<ul class="news_pic">
						<li><img src="frontstyle/imge/news_image1.jpg" /></li>
						<li><img src="frontstyle/imge/news_image2.jpg" ></li>
					</ul>
					<ol>
						<li class="num">1</li>
						<li>2</li>
					</ol>
				</div>
				<div class="news">
					<a class="p" href="news.php">新闻公告</a>
					<ul>
					<?php
					header('Content-type:text/html;charset=utf-8');
					$link=mysqli_connect('localhost','root','','php');
					$query="select * from news order by istop desc limit 5";
					$result=mysqli_query($link,$query);
					while($data=mysqli_fetch_assoc($result)){
					    if($data['istop']==0){
$html=<<<A
                    <li><a href="news_content_front.php?news_name={$data['news_name']}"><img src="frontstyle/imge/list_icon.png" />{$data['news_name']}</a></li>
A;
                        }else{
$html=<<<A
                    <li class="current_news"><a href="news_content_front.php?news_name={$data['news_name']}"><img src="frontstyle/imge/list_icon.png" />{$data['news_name']}</a></li>
A;
}
                    echo $html;
					}
					?>
 					</ul>
				</div>
			</div>
			<div class="content_bottom">
				<div class="bottom_left">
					<div class="title2">
						<span>中心简介</span>
					</div>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;计算机与信息工程学院心理健康教育工作站始建于2015年3月，在学院101办公室，占地面积50平方米。工作站领导小组由学院党委副书记、各年级辅导员、年级朋辈辅导员组成。工作站宗旨以增强学生的心理素质为目的，以普及心理健康知识...<a href="introduction.php">详细</a></p>
				</div>
				<div class="bottom_center">
					<div class="title2">
						<ul class="tit">
							<li class="current">心理百科</li>
							<li>心理保健</li>
							<li>心理咨询</li>
						</ul>
					</div>
					<div class="tab">
						<ul>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">春季常见十种异常心理</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">一张图分清抑郁症和抑郁情绪</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">无论你说什么都会否定你的人，都是什么心态？</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">焦虑的本质是对失控的恐惧 | 如何克服你的焦虑？</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">失眠的背后，也许是对关系的渴望</a></li>
						</ul>
						<ul class="hidden">
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">百合花开</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">愿你纵马天涯，归来仍满身豪情</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">爱，是遥远而咫尺的距离（散文诗）</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">有一种幸福叫“平平安安”</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">认识自己和他人 </a></li>
						</ul>
						<ul class="hidden">
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">心理咨询的过程</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">心理咨询的分类和形式</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">心理咨询与心理治疗的关系</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">心理咨询与治疗的注意事项</a></li>
							<li><img src="frontstyle/imge/list_tabicon.png"><a href="#">心理疾病的药物常识及其注意事项</a></li>
						</ul>
                    </div>
				</div>
				<div class="bottom_right">
					<div class="title2">
						<p>下载中心</p>
					</div>
					<div class="download">
					    <ul>
					        <li><img src="frontstyle/imge/list_tabicon.png" /><a href="#">初始转介记录单(转介至心理中心)</a></li>
					        <li><img src="frontstyle/imge/list_tabicon.png" /><a href="#">个体心理咨询协议书</a></li>
					        <li><img src="frontstyle/imge/list_tabicon.png" /><a href="#">瑞格智能身心反馈训练系统--训练...</a></li>
					        <li><img src="frontstyle/imge/list_tabicon.png" /><a href="#">向校外转介学生辅导员联系书</a></li>
					        <li><img src="frontstyle/imge/list_tabicon.png" /><a href="#">心理危机学生报表</a></li>
					    </ul>
					</div>
				</div>
			</div>

		</div>
		<!--  content end  -->

		<!--  gotopbtn start  -->
		<div id="goTopBtn">
			<img src="frontstyle/imge/lanren_top.jpg" />
		</div>
		<!--  gotopbtn end  -->

		<!--  fudong start  -->
		<div id="adu1">
			<!-- <iframe frameborder="0" src="about:blank">
				<head></head>
				<body></body>
			</iframe> -->
			<table>
				<tbody style="align:center">
					<tr style="align:center">
						<td>
							<a href="#" style="cursor: pointer;" ><img src="frontstyle/imge/timg (2).jpg" width="350" height="150" border="0" ></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<script type="text/javascript">
			function showimagecloseu1()
			{
				var obj=document.getElementById("adu1");
				obj.style.display = 'none';
			};
			var xu1 = 0;
			var yu1 = 0;
			var xinu1 = true;
			var yinu1 = true;
			var stepu1 = 1;
			var delayu1 = 20;

			var obj=document.getElementById("adu1");
			var bdyu1 = document.body;
				if (document.compatMode && document.compatMode != "BackCompat")
					bdyu1 = document.documentElement;
				else
					bdyu1 = document.body;
			function floatADu1()
			{
				var bdy_scrollTop = document.body.scrollTop | document.documentElement.scrollTop;
				var Lu1=Tu1=0;
				var Ru1= bdyu1.clientWidth-obj.offsetWidth;
				var Bu1 = bdyu1.clientHeight-obj.offsetHeight;
				obj.style.left = xu1 + bdyu1.scrollLeft+"px";
				obj.style.top = yu1 + bdy_scrollTop+"px";
				xu1 = xu1 + stepu1*(xinu1?1:-1);
				if(xu1 < Lu1)
				{
					xinu1 = true;
					xu1 = Lu1;
				}
				if(xu1 > Ru1)
				{
					xinu1 = false;
					xu1 = Ru1;
				}
				yu1 = yu1 + stepu1*(yinu1?1:-1);
				if(yu1 < Tu1)
				{
					yinu1 = true;
					yu1 = Tu1;
				}
				if(yu1 > Bu1)
				{
					yinu1 = false;
					yu1 = Bu1;
				}
			}
			var itlu1;
			if(window.navigator.userAgent.indexOf("MSIE")>=1)
			{
				window.attachEvent('onload', adftu1);
			}
			else
			{
				window.addEventListener('load',adftu1, false);
			}
			function adftu1()
			{
				itlu1 = setInterval("floatADu1()", delayu1);
			}
				obj.onmouseover=function(){clearInterval(itlu1);};
				obj.onmouseout=function(){itlu1=setInterval("floatADu1()", delayu1)};
		</script>
		<!--  fudong end  -->
		<?php include_once 'bottom.php';?>