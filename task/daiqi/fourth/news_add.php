<?php
header('Content-type:text/html;charset=utf-8');
$template['title']='添加新闻页';
$link=mysqli_connect('localhost','root','','php');
include_once 'tools.php';
session_start();
if(!is_login($link)){
    skip('login.php', '请登录！');
}
if(isset($_POST['submit'])){
    //验证管理员信息
    $check_flag='add';
    include_once 'check_name.php';
    $query="insert into news(news_name,sort) values('{$_POST['news_name']}','{$_POST['sort']}')";
    mysqli_query($link,$query);
    if(mysqli_affected_rows($link)==1){
        skip('news.php', '恭喜你，添加成功！3秒后自动跳转！');
    }else{
        skip('news_add.php', '对不起，添加失败，请重试！');
    }
}
include_once'admain.php';
?>
<div id="main">
	<div class="title" style="margin-bottom:20px">新闻列表</div>
	<form method="post">
    	<table class="au">
    		<tr>
    			<td>新闻标题</td>
    			<td><input type="text" name="news_name" ></td>
    			<td>
    				标题不得为空
    			</td>
    		</tr>
    		<tr>
    			<td>排序</td>
    			<td><input type="text" name="sort"></td>
    			<td>
    				填写数字
    			</td>
    		</tr>
    	</table>
    	<input class="btn" style="margin-top:10px;cursor:pointer;" type="submit" name="submit" value="添加" >
    </form>
</div>