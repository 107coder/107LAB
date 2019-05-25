<?php
header('Content-type:text/html;charset=utf-8');
$template['title']='修改新闻标题';
include_once 'tools.php';
$link=mysqli_connect('localhost','root','','php');
session_start();
if(!is_login($link)){
    skip('login.php', '请登录！');
}
if(!isset($_GET['id'])||!is_numeric($_GET['id'])){
    skip('news.php', 'id错误');
}
$query="select * from news where id={$_GET['id']}";
$result=mysqli_query($link,$query);
if(!mysqli_num_rows($result)){
    skip('news.php', '这个标题不存在！');
}
if(isset($_POST['submit'])){
    //验证
    $check_flag='update';
    include_once 'check_name.php';
    $query="update news set news_name='{$_POST['news_name']}',sort='{$_POST['sort']}' where id='{$_GET['id']}'";
    mysqli_query($link,$query);
    var_dump($query);
    if(mysqli_affected_rows($link)==1){
        skip('news.php', '修改成功！');
    }else{
        skip('news.php', '修改失败！');
    }
}
$data=mysqli_fetch_assoc($result);
include_once'admain.php';
?>
<div id="main">
	<div class="title" style="margin-bottom:20px">修改新闻标题      <?php echo $data['news_name']?></div>
	<form method="post">
    	<table class="au">
    		<tr>
    			<td>新闻标题</td>
    			<td><input type="text" value="<?php echo $data['news_name']?>" name="news_name" ></td>
    			<td>
    				标题不得为空，最大不得超过66个字符
    			</td>
    		</tr>
    		<tr>
    			<td>排序</td>
    			<td><input type="text" value="<?php echo $data['sort']?>" name="sort"></td>
    			<td>
    				填写数字
    			</td>
    		</tr>
    	</table>
    	<input class="btn" style="margin-top:10px;cursor:pointer;" type="submit" name="submit" value="修改" >
    </form>
</div>
