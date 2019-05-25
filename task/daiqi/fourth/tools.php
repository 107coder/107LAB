<?php
function is_login($link){
    if(isset($_SESSION['manage']['name']) && isset($_SESSION['manage']['password'])){
        $query="select * from general_user where name='{$_SESSION['manage']['name']}' and password='{$_SESSION['manage']['password']}'";
        $result=mysqli_query($link, $query);
        if(mysqli_num_rows($result)==1){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function skip($url,$message){
$html=<<<A
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="refresh" content="3;URL={$url}" />
    <title>正在跳转中</title>
    <style>
        .notice{
            font-size:30px;
            width:500px;
            margin:auto;
            margin-top:100px;
        }
        a{
         text-decoration:none;
        }
    </style>
</head>
<body>
<div class="notice"><a href="{$url}">{$message}</a></div>
</body>
</html>
A;
echo $html;
}
?>