<?php
 header('content-type:text/html;charset=utf-8');
//接受页面
$mysqli= new mysqli('localhost','root','root','newsdb');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf8');

$act=$_GET['act'];
if($act=='istop'){
	//实现置顶操作
	$id=$_GET['id'];
	//构造sql语句实现置顶（将istop字段设置为1）
	$sql="update news set istop=1 where id=$id";

	$r=$mysqli->query($sql);
	
	if($r){
		echo "置顶成功";
	}else{
		echo"置顶失败";
	}
}
if($act=='cancel'){
	//取消置顶
	$id=@$_GET['id'];
	//构造sql语句实现置顶（将istop字段设置为0）
	$sql="update news set istop=0 where id=$id";
	$r=$mysqli->query($sql);
	if($r){
		echo "取消置顶成功";
	}else{
		echo"取消置顶失败";
	}
}
?>