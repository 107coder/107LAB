<?php
header('content-type:test/html;charset=UTF-8');
$mysqli = new mysqli('localhost','root','root','test');
if($mysqli->connect_errno){
	die ('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('gb2312');

//执行SQL查询
//添加记录
//执行单条sql语句
$sql = "INSERT user(username,password) VALUES('king','king');";
$sql ="insert user(username,password) values('queen','queen'),('queen','queen');";
$res = $mysqli->query($sql);

if($res){
	//得到上一插入操作产生的auto_increment的值
	//得到上一步操作产生的受影响记录条数
	echo'恭喜你注册成功，你是网站第'.$mysqli->insert_id.'位用户';
	echo '有'.$mysqli->affected_rows.'记录被影响';
}else{
	//得到上一步操作产生的错误号和错误信息
	echo'error'.$mysqli->errno.':'.$mysqli->error;
}
//echo "<br/>";
//更新记录将表中的年龄+10

//$sql = "update user set age=age+10";
//$res=$mysqli->query($sql);
//if($res){
//	echo $mysqli->affected_rows.'条记录被更新';
//}else{
//	echo "error".$mysqli->errno.':'.$mysqli->error;
//}
//echo '<hr/>';
//将表中id>=6的用户删除掉
//$sql="delete from user where id>=6";
//$res=$mysqli->query($sql);
//if($res){
//	echo $mysqli->affected_rows.'条记录被更新';
//}else{
//	echo "error".$mysqli->errno.':'.$mysqli->error;
//}
//关闭mysql
$mysqli->close();
//affected_rows值为三种；
//1.受影响记录的条数
//2.-1，代表sql语句有问题
//3.0，代表没有受影像记录的条数


?>