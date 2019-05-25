<?php
header('content-type:text/html;charset=utf-8');
$mysqli = new mysqli('localhost','root','root','denglu');
if($mysqli->errno){
	die('connect error' .$mysqli->error);
}
$mysqli->set_charset('UTF8');
$sql="insert user3(username,password) values(?,?)";
//准备预处理语句
$mysqli_stmt=$mysqli->prepare($sql);
//print_r($mysqli_stmt);
//s,i,d
$username='king';
$password=md5('king');

//绑定参数
$mysqli_stmt->bind_param('ss',$username,$password);
//执行预处理语句
if($mysqli_stmt->execute()){
	echo $mysqli_stmt->insert_id;
	echo '<br/>';
}else{
	$mysqli_stmt->error;
}