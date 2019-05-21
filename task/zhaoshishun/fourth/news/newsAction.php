<?php
     header("Content-Type: text/html;charset=utf-8");
    //建立连接
    require("../data/config.inc.php");
     $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
      $select = mysqli_select_db($conn,DBNAME);       //选择数据库
    $_action=$_GET["action"];
	if($_action=='add')		//添加
	    {
			$title = $_POST["title"];
			$content = $_POST["content"];
			$time=date("Y-m-d H:i:s");
			if($title == ""){
					//用户名or密码为空
					echo"<script>window.alert('新闻标题不能为空！')</script>";
					echo"<script>window.location='../admin/home.php'</script>";
					exit;
				}else{
					mysqli_set_charset($conn,'utf8');	//设置编码	
						$sql_insert = "insert into news(title,content,time,ifTop) values('$title','$content','$time','0')";
						//插入数据
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
    		$sql="delete from news where news_id={$_GET['news_id']}";
    		mysqli_query($conn,$sql);
    		header("Location:../admin/home.php");

    }
    if($_action=='update')
    {
    	$news_id=$_GET['news_id'];
    	$title = $_POST["title"];
		$content = $_POST["content"];
			
			$sql = "update news set title='$title',content='$content' where news_id=$news_id";
			mysqli_set_charset($conn,'utf8');
			$ret = mysqli_query($conn,$sql);
			echo"<script>window.alert('修改成功！')</script>";
			echo"<script>window.location='../admin/home.php'</script>";
			exit;
	}
	mysqli_close($conn);
		
 	?>

   