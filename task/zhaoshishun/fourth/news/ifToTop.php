<?php
    header("Content-Type: text/html;charset=utf-8");
    //建立连接
   require("../data/config.inc.php");
        $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
       $select = mysqli_select_db($conn,DBNAME);       //选择数据库
    $_action=$_GET["action"];
	if($_action=='yes'){
		$news_id=$_GET['news_id'];
		$sql = "update news set ifTop='1' where news_id=$news_id";
		$ret = mysqli_query($conn,$sql);
		header("Location:../admin/home.php");
	}
	if($_action=='no'){
		$news_id=$_GET['news_id'];
		$sql = "update news set ifTop='0' where news_id=$news_id";
		$ret = mysqli_query($conn,$sql);
		header("Location:../admin/home.php");

	}

?>