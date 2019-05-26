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
include_once 'tools.php';
if(empty($_POST['name'])){
    skip('manage_add.php', '标题不得为空！');exit();
}
if(empty($_POST['password'])){
    skip('manage_add.php', '密码不得为空！');exit();
}
$_POST=escape($link, $_POST);
$query="select * from general_user where name='{$_POST['name']}'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)){
    skip('manage_add.php', '这个题目已经存在');
    exit();
}
?>