<?php
    //声明变量
    include_once 'tools.php';
    $name = isset($_POST['name'])?$_POST['name']:"";
    $password = isset($_POST['password'])?$_POST['password']:"";
    $re_password = isset($_POST['re_password'])?$_POST['re_password']:"";
    $sex = isset($_POST['sex'])?$_POST['sex']:"";

    if($password == $re_password) {
        $conn = mysqli_connect('localhost','root','','php');
        $sql_select="select name from general_user where name = '$name'";
        $ret = mysqli_query($conn,$sql_select);
        $row = mysqli_fetch_array($ret);
        if($name == $row['name']) {
            skip('registermain.php', '用户名已存在！');
        }else {
            $sql_insert = "insert into general_user(name,password,sex) values('$name','$password','$sex')";
            mysqli_query($conn,$sql_insert);
            skip('login.php', '注册成功！');
        }
        exit();
    } else {
        skip('registermain.php', '密码与重复密码不一致！');
    }

?>