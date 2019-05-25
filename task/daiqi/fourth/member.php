<?php
include_once 'tools.php';
$link=mysqli_connect('localhost','root','','php');
session_start();
if(!is_login($link)){
    skip('login.php', '请登录！');
}
$query="select * from general_user where (name='{$_SESSION['manage']['name']}')";
$result=mysqli_query($link,$query);
$data=mysqli_fetch_array($result);
$template['title']='管理员中心';
include_once 'admain.php';
?>
<div style="width:50%;height:400px;border:1px solid #fff;margin-top:50px;margin-left:150px;">
	<div style="height:150px;">
		<img src="style/photo.jpg" style="height:100px;">
		<span style="font-size:20px;margin-right:155px;">姓名：<?php echo $data['name'];?></span>
		<span style="font-size:20px">性别：<?php echo $data['sex'];?></span>
	</div>
	<span style="font-size:20px;margin-left:10px;">管理员级别：</span>
	<p style="font-size:20px;margin:5px 10px">所添加新闻：</p>
	<ul style="list-style: none;margin:5px 10px;">
	<?php
	$queryq="select * from news_content where ge_us_name='{$data['name']}' ";
	$resultr=mysqli_query($link, $queryq);
	while($datad=mysqli_fetch_assoc($resultr)){
$html=<<<A
    <li style="font-size:15px;"><img src="style/bg.jpg">&nbsp;&nbsp;{$datad['news_name']}</li>
A;
    echo $html;
	}

	?>
	</ul>
</div>