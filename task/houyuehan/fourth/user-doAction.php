<?php
//接收页面
header('content-type:text/html;charset-utf-8');
$mysqli=new mysqli('localhost','root','','demodb');
if($mysqli->connect_error){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$username=$_POST['username'];
//$username=$mysqli->escape_string($username);
$password=md5($_POST['password']);
$age=$_POST['age'];
$act=$_GET['act'];
$id=$_GET['id'];
switch($act){
    case 'addUser':
        //echo '添加用户的操作';
        $sql="insert user(username,password,age) 
        values('{$username}','{$password}','{$age}');";
        $res=$mysqli->query($sql);
        if($res){
            $insert_id=$mysqli->insert_id;
            echo "<script> 
            alert('添加成功，玩发展的第{$insert_id}位用户'); 
            location.href='userList.php';
            </script>";
            exit;
        }else{
            echo "<script> 
            alert('添加失败，重新添加'); 
            location.href='addUser.php';
            </script>";
            exit;
        }
        break;
    case 'delUser':
        //echo '删除用户的操作';
        //echo '删除记录'.$id;
        $sql="delete from user where id=".$id;
        $res=$mysqli->query($sql);
        if($res){
            $mes='删除成功';
        }else{
            $mes='删除失败';
        }
        $url='userList.php';
        echo "<script>
            alert('{$mes}');  
            location.href='{$url}';
            </script>";
            exit;
        //echo '删除用户的操作';
        //echo '删除记录'.$id;
    case 'editUser':
        $sql="update user set username='{$username}',password='{$password}',age='{$age}'
        where id=".$id;
        $res=$mysqli->query($sql);
        if($res){
            $mes='更新成功';
        }else{
            $mes='更新失败'.$id;
        }
        $url='userList.php';
        echo "<script>
            alert('{$mes}');  
            location.href='{$url}';
            </script>";
            exit;
        break;

};