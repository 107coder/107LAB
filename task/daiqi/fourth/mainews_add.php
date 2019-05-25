<?php
include_once 'tools.php';
header('Content-type:text/html;charset=utf-8');
$template['title']='添加新闻内容页';
$link=mysqli_connect('localhost','root','','php');
session_start();
if(!is_login($link)){
    skip('login.php', '请登录！');
}
if(isset($_POST['submit'])){
    //验证管理员信息
    include_once 'check_content.php';
    $query="insert into news_content(news_name,ge_us_name,sort,info) values('{$_POST['news_name']}','{$_POST['name']}','{$_POST['sort']}','{$_POST['info']}')";
    mysqli_query($link,$query);
    if(mysqli_affected_rows($link)==1){
        skip('mainews.php', '恭喜你，添加成功！3秒后自动跳转！');
    }else{
        skip('mainews_add.php', '对不起，添加失败，请重试！');
    }
}
include_once'admain.php';
?>
<div id="main">
	<div class="title">新闻内容列表</div>
	<form method="post">
    	<table class="au">
    		<tr>
    			<td>新闻标题</td>
     			<td>
     				<select name="news_name">
     				<option>----请选择一个新闻标题----</option>
    				<?php
     				$link=mysqli_connect('localhost','root','','php');
     				$query="select * from news";
     				$result=mysqli_query($link, $query);
     				while($data=mysqli_fetch_assoc($result)){
     				    echo "<option value='{$data['news_name']}'>{$data['news_name']}</option>";
     				}
     				?>
     				</select>
     			</td>
     			<td>
     				新闻标题不得为空,且必须是已经存在的
     			</td>
     		</tr>
    		<tr>
    			<td>新闻内容</td>
    			<td>
    				<textarea name="info"></textarea>
    			</td>
    			<td>
    				内容不得多于600个字
    			</td>
    		</tr>
    		<tr>
    			<td>管理员</td>
    			<td>
    				<select name="name">
     				<option>----请选择一个管理员----</option>
    				<?php
     				$link=mysqli_connect('localhost','root','','php');
     				$query="select * from general_user";
     				var_dump($query);
     				$result=mysqli_query($link, $query);
     				while($data=mysqli_fetch_assoc($result)){
     				    echo "<option value='{$data['name']}'>{$data['name']}</option>";
     				}
     				?>
     				</select>
    			</td>
    			<td>
    				选择一个管理员
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