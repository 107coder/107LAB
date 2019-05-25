<?php
include_once 'public.php';
head('新闻公告', 'frontstyle/news.css');
?>
<!--  content start  -->
		<div id="content">
			<div class="title" >
				<span>当前位置：</span><a href="front.php">首页</a>
				<span> >> </span>
				<a href="#">新闻公告</a>
			</div>
			<div class="picture">
				<img src="frontstyle/imge/newslist.jpg" >
			</div>
			<div class="doc">
				<ul>
				<?php
					header('Content-type:text/html;charset=utf-8');
					$link=mysqli_connect('localhost','root','','php');
					$query="select * from news order by istop desc";
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
					?></ul>
			</div>
			<div class="turn">
				<button type="button">上一页</button>
				<button type="button">下一页</button>
                <input type="number"/>
				<button type="submit">跳转</button>
			</div>
		</div>
		<!--  content end  -->
		<?php include_once 'bottom.php';?>