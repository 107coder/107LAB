<?php
header('content-type:text/html;charset=utf-8');
$mysqli = new mysqli('localhost','root','root','denglu');
if($mysqli->errno){
	die('connect error' .$mysqli->error);
}
$mysqli->set_charset('UTF8');
$sql="insert user3(username,password) values('imooc3','imooc3');";
$sql.="update user3 set where id=18;";
$sql.="delete from user3 where id=20;";
//$mysqli->query($sql);
$res=$mysqli->multi_query($sql);//查询多条语句，需要在前一个语句成功的情况下
var_dump($res);
?>