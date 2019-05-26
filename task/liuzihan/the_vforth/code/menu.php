<?php  
      error_reporting(0);
      session_start(); 
      //if(empty($_SESSION['id'] & $_SESSION['UserName']))
      if($_SESSION['id']==""&&$_SESSION['UserName']==""){
        $mes="请先登陆";
        echo "<script>alert('{$mes}');</script>";
        echo "<script>window.location.href='doladd.php';</script>";
      }
?>
	<h2>新闻管理系统</h2>
	<a href="index.php">浏览新闻</a> |
  <a href="add.php">发布新闻</a> |
  <a href="addo.php">中心简介</a>
	<form action="addd.php? act=exsit" method="post" >
                <input type="submit" name=""  value="退出登录"/>
                </form>
	<hr width="90%"/>