
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="第三次作业js/jquery1.js"></script>
		<script type="text/javascript" src="第三次作业js/new_file.js"></script>
		<link rel="stylesheet" href="第三次作业css/new_file.css"/>	
		<title></title>
	</head>
	<body>
		<div class="all" style="width: 1600px;height: 800px;">
			<div class="heade"style="overflow: hidden;">
				<span>设为首页&nbsp;&nbsp;|&nbsp;&nbsp;加入收藏</span>
			</div>
			<div class="heade1"style="overflow: hidden;">
				<img href="http://cs.henu.edu.cn/heart/index.html" src="images/ICON.png" />
			</div>
			<div class="heade3"style="width: 1600px;">
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<ul style="width: 1600px;">
					
					<li class="current1">&nbsp;&nbsp;&nbsp;<a href="http://127.0.0.1:8848/%E7%AC%AC%E4%B8%89%E6%AC%A1%E4%BD%9C%E4%B8%9A/%E7%AC%AC%E4%B8%89%E6%AC%A1%E4%BD%9C%E4%B8%9A.html" style="list-style: none;text-decoration: none;">首页</a>&nbsp;&nbsp;&nbsp;</li>
					<li >关于我们
					 <ol style="display: none;">
						<li ><a href="new_file.php">中心介绍</a></li>
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
			   <div class="tiaobody">
				   <div class="tiaohead">
					   <a <a href="第三次作业.php">当前位置: 首页 >></a>
					   <a>新闻公告</a>
				   </div>
				   <div class="tiaohead1"></div>
				   <div class="tiaotu">
					   <img src="images/新闻图片.png" />
				   </div>
				   <div class="tiaozi">
					   <p><br/></p>
					   <?php
					  require  'code/dbconfig.php';
					   $link=mysqli_connect(HOST,USER,PASS);
					   mysqli_select_db($link,'liuzihan');
					   mysqli_set_charset($link, "utf8");
					   //--------------------------------------
					   $sql = "select keywords from news ";
					   $results = mysqli_query($link,$sql);
					   while(@$row=mysqli_fetch_array($results,MYSQLI_NUM)){
						$rows[]=$row;
						//foreach($rows as $key)
					}
					 $total=mysqli_num_rows($results);

					   for($i=1;$i<=$total;$i++)
					   echo '<p><img src='.'images/list_icon.png'.">&nbsp;<a href='javsscript:;'>".$rows[$total-$i][0]."</a></p>";
					   /*<p><img src="images/list_icon.png"/>关于开展“正能量30天•习惯养成计划”活动的通知</p>
					   <p><img src="images/list_icon.png"/>我校各学院纷纷举办心理健康运动会</p>
					   <p><img src="images/list_icon.png"/>塑造健全人格，成就美好未来——数学与统计学院开展心理健康教育宣传周活动</p>
					   <p><img src="images/list_icon.png"/>第一临床学院成功举办心理健康宣传周系列活动</p>
					   <p><img src="images/list_icon.png"/>关注心理健康，拥抱美好明天——化学化工学院举办心理健康周系列教育活动</p>
					   <p><img src="images/list_icon.png"/>土木建筑学院成功举办心理健康运动会</p>
					   <p><img src="images/list_icon.png"/>生命科学学院开展2017年度心理健康教育宣传系列活动</p>
					   <p><img src="images/list_icon.png"/>土木建筑学院成功举办心理健康运动会</p>
					   <p><img src="images/list_icon.png"/>生命科学学院开展2017年度心理健康教育宣传系列活动</p>*/
					   ?>
				   </div>
				   <div class="code">
					   <button type="button" >上一页</button>
					   <button type="button" >下一页</button>
					   <input type="text" style="width: 50px;" />
					   <button type="button" style="width: 70px;"><a href='../code/index.php' style="text-decoration:none; color:#333; list-style:none;">新闻管理<a/></button> 
				   </div>
			   </div>
			    <div class="bt-content"></div>
			   <div class="btt-content">
			   				   <p>河南大学计算机与信息工程学院心理健康教育工作站  &nbsp;地址：河南大学计算机与信息工程学院101</p>
			   				   <p>电话：0371-23883169  &nbsp;邮编：475000</p>
				</div>	
			   
		</div>
	</body>
</html>

