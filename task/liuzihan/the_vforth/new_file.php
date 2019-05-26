<php?
 function OutputTitle(){
   echo 'TestPage';
 }
 function OutputContent(){
   echo 'Hello!';
 }
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="../../第三次作业js/jquery1.js"></script>
		<script type="text/javascript" src="../../第三次作业js/new_file.js"></script>
		<link rel="stylesheet" href="../../第三次作业css/new_file.css"/>	
		<title></title>
	</head>
	<body>
		<div class="all">
			<div class="heade">
				<span>设为首页&nbsp;&nbsp;|&nbsp;&nbsp;加入收藏</span>
			</div>
			<div class="heade1">
				<img href="http://cs.henu.edu.cn/heart/index.html" src="images/ICON.png" />
			</div>
			<div class="heade3"style="width: 1600px;">
				<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				<ul style="width: 1600px;">
					
					<li class="current1">&nbsp;&nbsp;&nbsp;<a href="第三次作业.php" style="list-style: none;text-decoration: none;">首页</a>&nbsp;&nbsp;&nbsp;</li>
					<li >关于我们
					 <ol style="display: none;">
						<li ><a href="new_file.html">中心介绍</a></li>
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
			   <div class="tp-content"></div>
			   <div class="content">
				   <h2>心理健康教育工作站介绍</h2>
				   </br>
				   <?php
					  require  'code/dbconfig.php';
					   $link=mysqli_connect(HOST,USER,PASS);
					   mysqli_select_db($link,'liuzihan');
					   mysqli_set_charset($link, "utf8");
					   //--------------------------------------
					   $sql = "select* from content ";
					   $results = mysqli_query($link,$sql);
					   while(@$row=mysqli_fetch_array($results,MYSQLI_NUM)){
						$rows[]=$row;
					}?>

				
				   <p><?php echo "{$rows[0][0]}";?></p>
			        </br>
					<ol>
						工作范围：
						<li>随时接受同学们的咨询，并对咨询对象进行适当辅导。</li>
						<li>为学院学生在生活、学习、情感等方面解惑答疑。</li>
						<li>定期开展心理健康知识宣传普及活动。</li>
						<li>建立和整理学生心理健康档案，定期对重点关注的学生进行摸底排查。</li>
						<li>定期参加学校心理培训，组织内部成员学习和交流。</li>
						<li>指导各班心理委员收集资料，并对重点关注学生定期跟踪记录，发现有严重心理问题的学生及时逐级上报，经批准后方能进行干预。</li>
					</ol>
			   </div>
			   <div class="bt-content"></div>
			   <div class="btt-content">
				   <p>河南大学计算机与信息工程学院心理健康教育工作站  &nbsp;地址：河南大学计算机与信息工程学院101</p>
				   <p>电话：0371-23883169  &nbsp;邮编：475000</p>
			   </div>
		</div>
	</body>
</html>
