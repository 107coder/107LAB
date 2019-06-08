<?php

header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','test');
if($mysqli->connect_errno){
    die ($mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$username=$_POST['username'];
$username=$mysqli->escape_string($username);//转义字符
$password=md5($_POST['password']);//加密
$age=$_POST['age'];
$act=$_GET['act'];
$id=$_GET['id'];
//根据不同操作完成不同的功能
switch($act){
    case 'addUser':
    //添加用户的操作
        //$sql="insert user(id,username,password,age) values(9,'{$username}','{$password}','{$age}');";
        $sql="insert user(username,password,age) values('{$username}','{$password}','{$age}');";
        $res=$mysqli->query($sql);
        if($res){
            $insert_id=$mysqli->insert_id;
            echo "<script type='text/javascript'>;
            alert('添加成功，恭喜您成为网站的第{$insert_id}位用户');
            location.href='userList.php';
            </script>";
        }else{
            echo "<script type='text/javascript'>;
            alert('添加失败,请重新添加');
            location.href='addUser.php';
            </script>";
            exit;
        }
        break;
    case 'delUser':
        //echo '删除记录'.$id;
        $sql="delete from user where id=".$id;
    $res=$mysqli->query($sql);
        if($res){
           $mes='删除成功';
        }else{
            $mes='删除失败';
        }
            $url='userList.php';
            echo "<script type='text/javascript'>;
            alert('{$mes}');
            location.href='{$url}';
            </script>";
            exit;
        break;
    case 'editUser':
    $sql="update user set username='{$username}',password='{$password}',age='{$age}' where id=".$id;"";
    $res=$mysqli->query($sql);
        if($res){
           $mes='更新成功';
        }else{
            $mes='更新失败';
        }
            $url='userList.php';
            echo "<script type='text/javascript'>;
            alert('{$mes}');
            location.href='{$url}';
            </script>";
            exit;
        break;
           
       

    }
?>