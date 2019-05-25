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
		<div class="tiaoshi" style="width:100%;margin: 0 auto;">
		<div style="width:1400px;height:5px;background-color:#4289C9;position:relative;top:100px;left:0px;text-align: center;margin: 0px auto;"></div>
	    <div class="wenben"style="width:100%;margin: 0 auto;">
	    <div class="ooo">	<h1><?php $sql = "select content from news where id=39;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></h1>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $sql = "select content from news where id=40;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></p><br />
        </div>
	    	<div  class="lun"style="width:1120px;height: 300px;font-size: 20px;position:relative;left:-230px;">
	    		<p>&nbsp;&nbsp;&nbsp;<?php $sql = "select content from news where id=41;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></p>
	    		<ul>
	    			<li><?php $sql = "select content from news where id=42;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></li>
	    			<li><?php $sql = "select content from news where id=43;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></li>
	    			<li><?php $sql = "select content from news where id=44;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></li>
	    			<li><?php $sql = "select content from news where id=45;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></li>
	    			<li><?php $sql = "select content from news where id=46;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></li>
	    			<li><?php $sql = "select content from news where id=47;"; $result = $mysqli->query($sql);while($row = mysqli_fetch_assoc($result)){echo "<td>{$row['content']}</td>";}; ?></li>
	    		</ul>
	    	</div>
	    	</div>
	    	<div style="width:100%;height:5px;background-color: #CCCCCC;position: relative;top:730px;">
	    		
	    </div>
	    <div style="width:100%;text-align:center;">
	    <pre style="position:relative;top:800px;font-size: 15px;color:">河南大学计算机与信息工程学院心理健康教育工作站  地址：河南大学计算机与信息工程学院101</pre>
	    <pre style="position:relative;top:820px;left:-13px;font-size:15px;color:;">电话：0371-23883169  邮编：475000</pre>
	  </div>
	  </div>
	</body>
		<script type="text/javascript" src="../js/2.js" ></script>
</html>