<?php
 header("Content-Type: text/html; charset=utf-8");
 require("dbconfig.php");
$link = @mysqli_connect(HOST,USER,PASS)or die("数据库连接失败");
mysqli_select_db($link,DBNAME);
$username=$_POST["账号"];
$password=$_POST["密码"];
$act=$_GET['act'];
switch($act){
	case 'adduser';
	
	$sql= "select * from manager where username='$_POST[账号]'";
	$rel=mysqli_query($link,$sql);
	if(mysqli_num_rows($rel)>0)
	{
		echo "<script>
		alert('该用户名已存在，请重新添加！');
		  location.href='添加.html';
		</script>";
	}
	else{
		   $sql="INSERT manager(username,password) values('{$username}','{$password}')";
		   $rel=mysqli_query($link,$sql);
		   if(!mysqli_num_rows($rel))
		   {
          echo "<script>
		   alert('添加成功！');
		   location='管理界面.php';
		   </script>";
		   }
		   else{
			echo "<script>
		   alert('添加失败！请重新添加！');
		   location.href='添加.html';
		   </script>";
		   }
        }
		break;
     case'deluser':
	 $username=$_GET["账号"];
	$sql= "select * from manager where username='$username'";
	$rel=mysqli_query($link,$sql);
	if(!mysqli_num_rows($rel))
	{
		echo "<script>
		alert('该用户名不存在！');
		location.href='删除.html';
		</script>";
	}
	else{
		   $sql="delete from manager where username='$username'";
		   $rel=mysqli_query($link,$sql);
		   if(!mysqli_num_rows($rel))
		   {
          echo "<script>
		   alert('删除成功！');
		   location='管理界面.php';
		   </script>";
		   }
		   else{
			echo "<script>
		   alert('删除失败！');
		   location.href='删除.html';
		   </script>";
		   }
        }
		break;
	 case'edituser':
	$sql= "select * from manager where username='$_POST[账号]'";
	$rel=mysqli_query($link,$sql);
	if(!mysqli_num_rows($rel)>0)
	{
		echo "<script>
		alert('该用户名不存在！');
		location.href='更新.html';
		</script>";
	}
	else{
		   $sql="update manager set username='{$username}',password='{$password}' where username='$username'";
		   $rel=mysqli_query($link,$sql);
		   if(!mysqli_num_rows($rel))
		   {
          echo "<script>
		   alert('修改成功！');
		   location='管理界面.php';
		   </script>";
		   }
		   else{
			echo "<script>
		   alert('修改失败！');
		   location.href='更新.html';
		   </script>";
		   }
        }
		   exit;
	      break;
}
?>
  