<?php
     header("Content-Type: text/html;charset=utf-8");
    //建立连接
    require("../data/config.inc.php");
         $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
         $select = mysqli_select_db($conn,DBNAME);       //选择数据库
    $_action=$_GET["action"];
	if($_action=='add')		//添加
	    {
	    	$workRange = $_POST["workRange"];
	
				if($workRange == ""){
					
					echo"<script>window.alert('工作范围不能为空！')</script>";
					echo"<script>window.location='../admin/home.php'</script>";
					exit;
				}else{
						mysqli_set_charset($conn,'utf8');	//设置编码	
						$sql_insert = "insert into workRange(workRange) values('$workRange')";
						//插入数据
						mysqli_query($conn,'SET NAMES UTF8');
						$ret = mysqli_query($conn,$sql_insert);
						$row = mysqli_fetch_array($ret); 
						//跳转添加成功页面
						echo"<script>window.alert('添加成功！')</script>";
						echo"<script>window.location='../admin/home.php'</script>";
						exit;
				}	
	    } 
   
   
    if($_action=='del')		//删除
    {
    		$sql="delete from workRange where id={$_GET['id']}";
    		mysqli_query($conn,$sql);
    		header("Location:../admin/home.php");

    }
    if($_action=='update')
    {
    	$id=$_GET['id'];
    	$workRange = $_POST["workRange"];
		
			
			$sql = "update workRange set workRange='$workRange' where id=$id";
			mysqli_set_charset($conn,'utf8');
			$ret = mysqli_query($conn,$sql);
			header("Location:../admin/home.php");	
	}



	if($_action=='updateIntroduce')
    {
    	$id=$_GET['id'];
    	$introduce = $_POST["introduce"];
		
			
			$sql = "update introduce set introduce='$introduce' where id=$id";
			mysqli_query($conn,'SET NAMES UTF8');
			$ret = mysqli_query($conn,$sql);
			header("Location:../admin/home.php");	
	}
	mysqli_close($conn);
		
 	?>

   