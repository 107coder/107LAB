<?php
include_once'tools.php';
header('Content-type:text/html;charset=utf-8');
$link=mysqli_connect('localhost','root','','php');
session_start();
if(!is_login($link)){
    skip('login.php', '请登录！');
}
$query=@"select * from news where id={$_GET['id']}";
$query=@"delete from news where id={$_GET['id']}";
mysqli_query($link,$query);
if(mysqli_affected_rows($link)==1){
    skip('news.php', '恭喜你，删除成功！3秒后自动跳转！');
}else{
    skip('news.php', '对不起，删除失败，请重试！');
}
?>