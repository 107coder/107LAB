<?php
include_once 'tools.php';
$link=mysqli_connect('localhost','root','','php');
if(!is_login($link)){
    skip('front/front.php', '您还未登录!');
}
session_start();
session_unset();
session_destroy();
setcookie(session_name(),'',time()-3600,'/');
header('Location:login.php');
?>