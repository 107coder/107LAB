<?php
include_once 'public.php';
head('新闻内容页', 'frontstyle/download.css');
?>
<!--  content start  -->
		<div id="content">
			<div class="title" >
				<span>当前位置：</span><a href="front.php">首页</a>
				<span> >> </span>
				<a href="#">新闻公告</a>
				<span> >> </span>
				<a href="#">正文</a>
			</div>
			<div class="doc">
				<?php
				$link=mysqli_connect('localhost','root','','php');
				$query="select * from news_content where news_name='{$_GET['news_name']}'";
				$result=mysqli_query($link,$query);
				$data=mysqli_fetch_assoc($result);
$html=<<<A
                <h1 style="font-weight:10;font-size:20px;width:100%;text-align:center;">{$_GET['news_name']}</h1>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;{$data['info']}</p>



A;
            echo $html;
				?>
			</div>
		</div>
		<!--  content end  -->
<?php include_once 'bottom.php'; ?>s