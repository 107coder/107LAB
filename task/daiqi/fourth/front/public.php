<?php
function head($word,$url){
$html=<<<A
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{$word}</title>
	<link rel="stylesheet" type="text/css" href="frontstyle/public.css"/>
	<link rel="stylesheet" type="text/css" href="{$url}">
	<script type="text/javascript" src="frontstyle/jquery.js"></script>
	<script type="text/javascript" src="frontstyle/public.js"></script>
	<script type="text/javascript" src="frontstyle/index.js"></script>
</head>
<body>
	<!--  header  start  -->
	<div id="header">
		<div class="header_top">
			<div class="word">
				<ul>
					<li>设为首页</li>
					<li>|</li>
					<li>加入收藏</li>
					<li>|</li>
					<li><a href="../login.php">管理中心</a></li>
				</ul>
			</div>
		</div>
		<div class="header_mid">
			<a href="front.php"><img src="frontstyle/imge/ICON.png" /></a>
		</div>
		<div class="header_nav">
			<ul class="nav1">
				<li>
					<a href="front.php">首页</a>
				</li>
				<li>
					<a href="#">关于我们</a>
					<ul class="nav2">
						<li><a href="introduction.php">中心简介</a></li>
						<li><a href="#">服务内容</a></li>
						<li><a href="#">师资队伍</a></li>
					</ul>
				</li>
				<li>
					<a href="news.php">新闻公告</a>
					<ul class="nav2">
						<li><a href="#">中心动态</a></li>
						<li><a href="#">学院风采</a></li>
						<li><a href="#">朋辈成长</a></li>
						<li><a href="#">教师园地</a></li>
					</ul>
				</li>
				<li>
					<a href="#">心理百科</a>
					<ul class="nav2">
						<li><a href="#">心理常识</a></li>
						<li><a href="#">最新发现</a></li>
					</ul>
				</li>
				<li>
					<a href="#">心理保健</a>
					<ul class="nav2">
						<li><a href="#">情感美文</a></li>
						<li><a href="#">开心一刻</a></li>
					</ul>
				</li>
				<li>
					<a href="#">心理咨询</a>
					<ul class="nav2">
						<li><a href="#">咨询常识</a></li>
						<li><a href="#">药品指南</a></li>
					</ul>
				</li>
				<li>
					<a href="#">心理测评</a>
					<ul class="nav2">
						<li><a href="#">心理普查</a></li>
						<li><a href="#">趣味检测</a></li>
						<li><a href="#">专业问卷</a></li>
					</ul>
				</li>
				<li>
					<a href="#">专题活动</a>
				</li>
				<li>
					<a href="download.php">下载中心</a>
				</li>
				<li>
					<a href="message.php">我要留言</a>
				</li>
			</ul>
		</div>
	</div>
	<!--  header end  -->
A;
    echo $html;
}