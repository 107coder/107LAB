<?php
include_once 'public.php';
head('我要留言', 'frontstyle/message.css');
?>
<!--  content start  -->
		<div id="content">
			<div class="title" >
				<span>当前位置：</span><a href="front.php">首页</a>
				<span> >> </span>
				<a href="#">我要留言</a>
			</div>
			<div class="main">
				<p style="color: #39A4DB;font-weight: bold;">编辑留言信息：</p>
				<span>请输入你的邮箱：</span>
				<input type="text" name="email">
				<p>请输入留言内容：</p>
				<textarea rows="25" cols="70"></textarea>
				<br>
				<button type="button">发表留言</button>
			</div>
		</div>
		<!--  content end -->
		<?php include_once 'bottom.php';?>