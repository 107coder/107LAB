<?php 
header('content-type:text/html;charset=UTF-8');
$mysqli = new mysqli('localhost','root','root','newsdb');
if($mysqli->errno){
	die('connect error' .$mysqli->error);
}
$mysqli->set_charset('UTF8');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/2.css">
		<script type="text/javascript" src="../js/jquery-3.3.1.js"/></script>	
		 <?php echo"<title></title>";?>
	</head>
	<body>
		<div id="shoduan" >
			<div id="wenzi"><pre style="cursor:pointer">设为首页 | 加入收藏</pre></div>
		</div>
		<div id="shoduan2">
			<a href="3.php"><img src="../img/ICON.png" style="width:850px;height:70px;position:relative;left:200px;top:20px;"></a>
		</div>
		<div id="caidan" class="caidan">
			<div  id="candan1" class="caidan1">
			<ul class="caiji">
				<a href="disan.php"><li>首页</li></a>
				<li class="cai" onmouseover="chuxian(this)" onmouseout="xiaoshi(this)">
					<a href>关于我们</a>
					<ol  class="cai1">
						<a href="2.php">
							<li>中心简介</li>
						</li>
						<li>
							<a href>服务内容</a>
						</li>
						<li>
							<a href>师资队伍</a>
						</li>
					</ol>
				</li>
				<li class="cai" onmouseover="chuxian(this)" onmouseout="xiaoshi(this)" >
					<a href>新闻公告</a>
					<ol class="cai1">
						<li>
							<a href>中心动态</a>
						</li>
						<li>
							<a href>学院风采</a>
						</li>
						<li>
							<a href>朋辈成长</a>
						</li>
						<li>
							<a href>教师园地</a>
						</li>
					</ol>
				</li>
				<li class="cai" onmouseover="chuxian(this)" onmouseout="xiaoshi(this)">
					<a href>心理百科</a>
					<ol  id="cai1" class="cai1">
						<li>
							<a href>心理常识</a>
						</li>
						<li>
							<a href>最新发现</a>
						</li>
					</ol>
					
				</li>
				<li class="cai" onmouseover="chuxian(this)" onmouseout="xiaoshi(this)">
					<a href>心理保健</a>
					<ol id="cai1" class="cai1" style="display:none">
						<li>
							<a href>情感美文</a>
						</li>
						<li>
							<a href>开心一刻</a>
						</li>
					</ol>
					
				</li>
				<li class="cai" onmouseover="chuxian(this)" onmouseout="xiaoshi(this)">
					<a href>心理咨询</a>
					<ol class="cai1" style="display:none">
						<li>
							<a href>咨询常识</a>
						</li>
						<li>
							<a href>药品指南</a>
						</li>
					</ol>
					
				</li>
				<li class="cai" onmouseover="chuxian(this)" onmouseout="xiaoshi(this)">
					<a href>心理测评</a>
					<ol class="cai1" style="display:none">
					
						<li>
							<a href>心灵普查</a>
						</li>
						<li>
							<a href>趣味检测</a>
						</li>
						<li>
                            <a href>专业问卷</a>
						</li>
					</ol>
					
				</li>
				<li><a href="#">专题活动</a></li>	
      			<a href="4.php"><li>下载中心</li></a>
				<a href="5.php"><li>我要留言</li></a>	
			</ul>
			</div>
		</div>
		<div class="dabao"style="margin: 0 auto;width:100%;">
		<div class="dang1" style="width: 1000px;height: 500px;position: relative;top:100px;left:-30px;font-size: 20px;">
		<div class="dang" style="width:1100px;height:30px;position:relative;top:20px;left:-30px;font-size: 20px;"><p>当前位置: <a href="disan.php">首页</a> >> <a href="4.php">新闻公告</a></p></div>
		<div style="width:1100px;height:5px;background-color:#4289C9;position:relative;top:60px;left:-30px;text-align: center;margin: 0px auto;"></div>		
			
			<img src="../img/8.jpg" style="width:320px;height:530px;position:relative;top:60px;left:-30px;">
			<ul style="position:relative;top:-470px;left:280px;">
				<li><img src="../img/list_icon.png"style="width:20px;height: 20px;position: relative;float:left;"><a href="11.php"><?php $sql = "select content from news where id=29;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></a></li>
				<li><img src="../img/list_icon.png"style="width:20px;height: 20px;position: relative;float:left;"><a href="12.php"><?php $sql = "select content from news where id=30;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></a></li>
				<li><img src="../img/list_icon.png"style="width:20px;height: 20px;position: relative;float:left;"><a href="13.php"><?php $sql = "select content from news where id=31;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></a></li>
				<li><img src="../img/list_icon.png"style="width:20px;height: 20px;position: relative;float:left;"><a href="14.php"><?php $sql = "select content from news where id=32;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></a></li>
				<li><img src="../img/list_icon.png"style="width:20px;height: 20px;position: relative;float:left;"><a href="15.php"><?php $sql = "select content from news where id=33;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></a></li>
				<li><img src="../img/list_icon.png"style="width:20px;height: 20px;position: relative;float:left;"><a href="16.php"><?php $sql = "select content from news where id=34;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></a></li>
				<li><img src="../img/list_icon.png"style="width:20px;height: 20px;position: relative;float:left;"><a href="17.php"><?php $sql = "select content from news where id=35;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></a></li>
				<li><img src="../img/list_icon.png"style="width:20px;height: 20px;position: relative;float:left;"><a href="18.php"><?php $sql = "select content from news where id=36;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></a></li>
				<li><img src="../img/list_icon.png"style="width:20px;height: 20px;position: relative;float:left;"><a href="19.php"><?php $sql = "select content from news where id=37;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></a></li>
				<li><img src="../img/list_icon.png"style="width:20px;height: 20px;position: relative;float:left;"><a href="20.php"><?php $sql = "select content from news where id=38;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></a></li>
			</ul>
			<p style="position:relative;top:-450px;left:740px;"><button style="height:30px;">上一页</button>
			<button style="height:30px;">下一页</button>
			<input type="text" style="height:25px;width:65px;position: relative;top:0px;left:10px;">
			&nbsp;&nbsp;
			<button style="height:30px;">跳转</button></p>
		</div>
		<div style="width:100%;height:5px;background-color: #CCCCCC;position: relative;top:275px;">		
	  </div>
	    	<pre style="position:relative;top:350px;font-size: 15px;margin: 0 auto;text-align: center;">河南大学计算机与信息工程学院心理健康教育工作站  地址：河南大学计算机与信息工程学院101</pre>
	    	<pre style="position:relative;top:380px;left:-13px;font-size:15px;margin: 0 auto;text-align: center;">电话：0371-23883169  邮编：475000</pre>	
	 
	 </div>
	</body>
		<script type="text/javascript" src="../js/2.js" ></script>
</html>
