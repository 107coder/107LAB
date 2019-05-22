<?php
 header("Content-Type: text/html; charset=utf-8");
 require("INTdbconfig.php");
$link = @mysqli_connect(HOST,USER,PASS)or die("数据库连接失败");
mysqli_select_db($link,DBNAME);

$act=$_GET["act"];
switch($act){
	case 'adduser':
	$content=$_POST['content'];
        $sql="insert into content values(null,'{$content}')";
		 $rel=mysqli_query($link,$sql);
		 $id = mysqli_insert_id($link);
		 if(!mysqli_num_rows($rel))
		  {
          echo "<script>
		   alert('添加成功！');
		   location='INTaction.php';
		   </script>";
		   }
		   else{
			echo "<script>
		   alert('添加失败！请重新添加！');
		   location.href='INTadd.action';
		   </script>";
		   }
	case'edituser':
	        $content = $_POST["content"];
				
		   $sql="update content set content='{$content}' where id='1'";
		   $rel=mysqli_query($link,$sql);
		   if(!mysqli_num_rows($rel))
		   {
          echo "<script>
		   alert('修改成功！');
		   location='INTaction.php';
		   </script>";
		   }
		   else{
			echo "<script>
		   alert('修改失败！');
		   location.href='INTadd.action';
		   </script>";
		   }
		   exit;
	      break;
}
?>