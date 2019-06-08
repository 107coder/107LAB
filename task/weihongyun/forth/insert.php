<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','test');
if($mysqli->connect_errno){
	die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
//建表
//插入记录
$sql="insert user(username,password,age) VALUES('king','king','0');";
$res=$mysqli->query($sql);
//var_dump($res);
if($res){
	echo '恭喜您注册成功成为第'.$mysqli->insert_id.'位用户<br/>';
}
else{
	echo 'ERROR'.$mysqli->errno.':'.$mysqli->error;
}
echo '<hr/>';
echo '<hr/>';
//更新记录
$sql="update user set age=age+10";
$res=$mysqli->query($sql);
if($res){
	echo $mysqli->affected_rows.'条记录被更新';
}else{
	echo "ERROR ".$mysqli->errno.':'.$mysqli->error;
}
echo '<hr/>';
//将表中id>=3的删掉
$sql="delete from user where id>=6";
$res=$mysqli->query($sql);
if($res){
	echo $mysqli->affected_rows.'条记录被更新';
}else{
	echo "ERROR ".$mysqli->errno.':'.$mysqli->error;
}
echo '<hr/>';
//查询
$sql="select id,username,age from user";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result&&$mysqli_result->num_rows>0){
	echo $mysqli_result->num_rows;
}else{
	echo '查询错误或者结果集中没有记录';
}
echo '<hr/>';
//关闭连接
$mysqli->close();