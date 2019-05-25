<?php
include_once 'public.php';
head('中心简介', 'frontstyle/introduction.css');
?>
<!--  content start  -->
		<div id="content">
			<h1>心理健康教育工作站简介</h1>
			<div class="brief">
				<?php
				$link=mysqli_connect('localhost','root','','php');
				$query="select * from news_content where news_name='中心简介'";
				$result=mysqli_query($link,$query);
				$data=mysqli_fetch_assoc($result);
$html=<<<A
                &nbsp;&nbsp;&nbsp;&nbsp;{$data['info']}
A;
                echo $html;
                ?>
			</div>
		</div>
		<!--  content end  -->
<?php include_once 'bottom.php';?>