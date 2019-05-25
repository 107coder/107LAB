<?php
header('Content-type:text/html;charset=utf-8');
$template['title']='添加管理员页';
include_once 'tools.php';
$link=mysqli_connect('localhost','root','','php');
session_start();
if(!is_login($link)){
    skip('login.php', '请登录！');
}
if(basename($_SERVER['SCRIPT_NAME'])=='manage_add.php' || basename($_SERVER['SCRIPT_NAME'])=='manage_delete.php'){
    if($_SESSION['manage']['level']!='0'){
        if(!isset($_SERVER['HTTP_REFERER'])){
            $_SERVER['HTTP_REFERER']='member.php';
        }
    skip($_SERVER['HTTP_REFERER'], '对不起，您权限不足！');exit();
    }
}
if(isset($_POST['submit'])){
    include_once 'check_manage.php';
    $query="insert into general_user(name,password,sex,level) values('{$_POST['name']}','{$_POST['password']}','{$_POST['sex']}','{$_POST['level']}')";
    var_dump($query);
    mysqli_query($link, $query);
    if(mysqli_affected_rows($link)==1){
        skip('manage.php','恭喜你，添加成功！');
    }else{
        skip('manage_add.php','对不起，添加失败，请重试！');
    }
}
?>
<?php include 'admain.php';?>
<div id="main">
	<div class="title" style="margin-bottom:20px;">添加管理员</div>
	<form method="post">
		<table class="au">
			<tr>
				<td>管理员名称</td>
				<td><input name="name" type="text" /></td>
				<td>
					名称不得为空
				</td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input name="password" type="password" /></td>
				<td>
					密码不得为空
				</td>
			</tr>
			<tr>
    			<td>性别</td>
     			<td>
     				<select name="sex">
     					<option value="男">男</option>
     					<option value="女">女</option>
     				</select>
     			</td>
			</tr>
			<tr>
				<td>管理员级别</td>
     			<td>
     				<select name="level">
     					<option value="1"> 普通管理员 </option>
     					<option value="0"> 超级管理员 </option>
     				</select>
     				<td>
						普通管理员不具备删除、添加管理员能力
					</td>
     			</td>
			</tr>
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="添加" />
	</form>
</div>