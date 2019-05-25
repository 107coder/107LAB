<?php
header('content-type:text/html;charset=UTF-8');
$mysqli = new mysqli('localhost','root','root','denglu');
if($mysqli->errno){
	die('connect error' .$mysqli->error);
}
$mysqli->set_charset('UTF8');
$username=@$_GET['username'];
$password=md5(@$_GET['password']);
//$sql="select * from user where username='{$username}' and password='{$password}'; ";
//$mysqli_result=$mysqli->query($sql);
//if($mysqli_result && $mysqli_result->num_rows>0 ){
//	echo'登陆成功';
//}else{
//	echo'登陆失败';
//}
$sql="select *from user3 where username=? and password=?";
$mysqli_stmt=$mysqli->prepare($sql);
$mysqli_stmt->bind_param('ss',$username,$password);
if($mysqli_stmt->execute()){
	$mysqli_stmt->store_result();
	if($mysqli_stmt->num_rows>0){
		echo '登陆成功';
	}else{
		echo'登陆失败';
	}
}
//释放结果集
$mysqli_stmt->free_result();
//关闭结果集
$mysqli_stmt->close();
$mysqli->close();