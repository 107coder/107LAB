<?php
header('content-type:text/html;charset=UTF-8');
$mysqli = new mysqli('localhost','root','root','test');
if($mysqli->errno){
	die('connect error' .$mysqli->error);
}
$mysqli->set_charset('UTF8');
$sql="select id,username,age from user where id>=?";
$mysqli_stmt=$mysqli->prepare($sql);
$id=1;
$mysqli_stmt->bind_param('i',$id);
if($mysqli_stmt->execute()){
	$mysqli_stmt->bind_result($id,$username,$age);
	while($mysqli_stmt->fetch()){
		echo '编号'.$id,'<br/>';
		echo '用户名'.$username,'<br/>';
		echo '年龄'.$age,'<br/>';
		echo'<hr/>';
	}
}
$mysqli_stmt->free_result();
$mysqli_stmt->close();
$mysqli->close();