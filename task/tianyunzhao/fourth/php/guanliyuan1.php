<?php
header('content-type:text/html;charset=UTF-8');
?>

<?php
    $server="localhost";//主机
    $db_username="root";//你的数据库用户名
    $db_password="root";//你的数据库密码

    $son = mysqli_connect($server,$db_username,$db_password);//链接数据库
    if(!$son){
        die("can't connect".mysqli_error($son));//如果链接失败输出错误
    }
    
    mysqli_select_db($son,'denglu');//选择数据库
?>