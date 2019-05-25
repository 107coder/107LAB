<?php
function escape($link,$data){
    if(is_string($data)){
        return mysqli_real_escape_string($link,$data);
    }
    if(is_array($data)){
        foreach ($data as $key=>$val){
            $data[$key]=escape($link,$val);
        }
    }
    return $data;
}
if(empty($_POST['news_name'])){
    skip('news_add.php', '标题不得为空！');exit();
}
if(!is_numeric($_POST['sort'])){
    skip('news_add.php', '排序只能是数字！');exit();
}
$_POST=escape($link, $_POST);
switch($check_flag){
    case 'add':
        $query="select * from news where news_name='{$_POST['news_name']}'";
        break;
    case 'update':
        $query="select * from news where news_name='{$_POST['news_name']}' and id!={$_GET['id']}";
        break;
    default:
        skip('news_add.php', '$check_flag参数错误！');exit();
}
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)){
    skip('news_add.php', '这个标题已经存在');
    exit();
}
include_once 'tools.php';
?>