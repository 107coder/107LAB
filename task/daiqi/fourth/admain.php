<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php echo $template['title']?></title>
<meta name="keywords" content="后台界面" />
<meta name="description" content="后台界面" />
<link rel="stylesheet" type="text/css" href="style/public.css" />
</head>
<body>
	<div id="top">
		<div class="logo">
			管理中心
		</div>
		<ul class="nav">
			<li><a href="front/front.php" target="_blank">计算机与信息工程学院心理健康工作站</a></li>
		</ul>
		<div class="login_info">
			<a href="front/front.php" style="color:#fff;">网站首页</a>&nbsp;|&nbsp;
			管理员： <?php echo $_SESSION['manage']['name']?> <a href="logout.php">[注销]</a>
		</div>
	</div>
	<div id="sidebar">
		<ul>
			<li>
				<div class="small_title">管理员中心</div>
				<ul class="child">
					<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='member.php') {echo 'class="current "';}?>href="member.php">管理员信息</a></li>
				</ul>
			</li>
			<li>
				<div class="small_title">系统</div>
				<ul class="child">
					<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='manage.php') {echo 'class="current "';}?>href="manage.php">管理员列表</a></li>
					<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='manage_add.php') {echo 'class="current "';}?> href="manage_add.php">添加管理员</a></li>
				</ul>
			</li>
			<li><!--  class="current" -->
				<div class="small_title">内容管理</div>
				<ul class="child">
					<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='news.php') {echo 'class="current "';}?> href="news.php">新闻标题列表</a></li>
					<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='news_add.php'){echo 'class="current"';}?>href="news_add.php">添加新闻标题</a></li>
					<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='mainews.php'){echo 'class="current"';}?>href="mainews.php">新闻内容列表</a></li>
					<li><a <?php if(basename($_SERVER['SCRIPT_NAME'])=='mainews_add.php'){echo 'class="current"';}?>href="mainews_add.php">添加新闻内容</a></li>
				</ul>
			</li>

		</ul>
	</div>
</body>
</html>