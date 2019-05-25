<?php
include_once 'tools.php';
$link=mysqli_connect('localhost','root','','php');
$query="select istop from news where id={$_GET['id']}";
$result=mysqli_query($link,$query);
$data=mysqli_fetch_assoc($result);
if($data['istop']==0){
    $query="update news set istop=1 where id={$_GET['id']}";
    $result=mysqli_query($link,$query);
    skip('news.php', '置顶成功！');
}
else{
    $query="update news set istop=0 where id={$_GET['id']}";
    $result=mysqli_query($link,$query);
    skip('news.php', '取消置顶成功！');
}