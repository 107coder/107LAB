<?php
header('content-type:text/html;charset=utf-8');
$mysqli = new mysqli('localhost','root','root','test');
if($mysqli->errno){
	die('connect error' .$mysqli->error);
}
$mysqli->set_charset('UTF8');
$sql="select id,username,age, fron user;";


$res=$mysqli->multi_query($sql);//查询多条语句，需要在前一个语句成功的情况下
var_dump($res);
?>