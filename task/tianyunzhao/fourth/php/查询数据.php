<?php
header('content-type:test/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','root','denglu');
if($mysqli->connect_errno){
	die('connect error:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$sql = "select id,username,password from user3";
$mysqli_result=$mysqli->query($sql);
//var_dump($mysqli_result);
if($mysqli_result&&$mysqli_result->num_row>0){
	//echo $mysqli_result->num_rows;
	//$row = $mysqli_result->fetch_all();//获取结果集中所有记录，默认返回的是二维的
	//索引+索引的形式
	//$row=$mysqli_result->fetch_all(mysqli_num//索引部分);
	//$row=$mysqli_result->fetch_all(mysqli_assoc//关联部分);
	//$row=$mysqli_result->fetch_all(mysqli_both);
	$row=$mysqli_result->fetch_row();//取得结果集中第一条记录作为索引数组返回
	print_r($row);
	echo '<hr/>';
	$row=$mysqli_result->fetch_assoc();
	print_r($row);
	echo '<hr/>';
	$row=$mysqli_result->fetch_array(mysqli_assoc);
	print_r($row);
	echo '<hr/>';
	
	$row=$mysqli_result->fetch_object();
	print_r($row);
	$mysqli_result->data_seek(0);
	$row=$mysqli_result->fetch_assoc();
	print_r($row);
	
	
	while($row=$mysqli_result->fetch_assoc){
		print_r($row);
		echo'<hr/>';
	}
	//关闭结果集
	$mysqli_result->close();
}else{
	echo'查询错误或者结果没有记录';
}
?>