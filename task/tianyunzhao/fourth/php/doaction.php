<?php
 header('content-type:text/html;charset=utf-8');
//接受页面
$mysqli= new mysqli('localhost','root','root','denglu');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$id=@$_GET['id'];
$username=@$_POST['username'];
$username=$mysqli->escape_string($username);
$password=md5(@$_GET['password']);
$act=@$_GET['act'];

//根据不同操作完成不同功能
switch($act){
	case 'adduser':
	    //echo'添加用户操作';			   	
		$sql="insert user3(username,password) values('{$username}','{$password}')";
		
		$res=$mysqli->query($sql);	
		
		if($res){
			$insert_id=$mysqli->insert_id;
			echo "<script type='test/javascript'>
			alert('添加成功,是第{$insert_id}位用户');
			location.href='实现用户列表.php';
			</script>";
	    exit;
		}else{
			echo"<script type='test/javascript'>
			alert('添加失败,重新添加');
			location.href='adduser.php';
			</script>";
		exit;	
		}
		break;
	case 'deluser':
		//echo '删除记录'.$id;
		$sql="delete from user3 where id=".$id;
        $Ces=$mysqli->query($sql);	
		
        if($Ces){
			$mes='删除成功'; 	 	
			exit;
		}else{
			$mes='删除失败';
				exit;
		}
		$url='实现用户列表.php';
		echo"<script type='test/javascript'>
			alert('{mes}');
			location.href='{$url}';
			</script>";
			exit;
		break;
	case'edituser':
	
		$sql="update user3 set username='{$username}', password='{$password}'  where id=".$id;
		$res=$mysqli->query($sql);
	 
		if($res){
			$mes='更新成功';
			exit;
		}else{
			$mes='更新失败';
				exit;
		}
		$url='实现用户列表.php';
		echo"<script type='test/javascript'>
			alert('{mes}');
			location.href='{$url}';
			</script>";
			exit;
		break;
}
?>