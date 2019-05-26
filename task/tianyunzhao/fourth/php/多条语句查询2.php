<?php
header('content-type:text/html;charset=utf-8');
$mysqli = new mysqli('localhost','root','root','test');
if($mysqli->errno){
	die('connect error' .$mysqli->error);
}
$mysqli->set_charset('UTF8');
$sql="select id,username,age from user;";
$sql.="select * from mysql.user;";
$sql.="select current_user();";
$sql.="select now(); ";
//use_result()/store_result()//获取第一条查询产生的结果集
//more_results():检测是否有更多的结果集
//next_result():将结果集指针向下移动一位

if($mysqli->multi_query($sql)){
	do{
		if($mysqli_result=$mysqli->store_result()){
			$rows[]=$mysqli_result->fetch_all(MYSQLI_assoc);
		}
		
	}while($mysqli->more_results()&& $mysqli->next_result());
	
}else{
	echo $mysqli->error;
	
}
print_r($rows);
$mysqli->close();
?>