<?php
include_once'tools.php';
header('Content-type:text/html;charset=utf-8');
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
    }
    skip($_SERVER['HTTP_REFERER'], '对不起，您权限不足！');exit();
}
$query="select * from general_user where name='{$_GET['name']}'";
$query="delete from general_user where name='{$_GET['name']}'";
mysqli_query($link,$query);
if(mysqli_affected_rows($link)==1){
    skip('manage.php', '恭喜你，删除成功！3秒后自动跳转！');
}else{
    skip('manage.php', '对不起，删除失败，请重试！');
}
?>