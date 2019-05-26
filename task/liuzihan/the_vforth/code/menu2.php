<?php  
      session_start(); 
      if(empty($_SESSION['UserName']&$_SESSION['UserName'])){
        $mes="请先登陆";
        echo "<script>alert('{$mes}');</script>";
        echo "<script>window.location.href='superdoladd.php';</script>";
      }/*elseif(isset($_COOKIE['adminName'])){
        echo $_COOKIE['adminName'];
      }*/
      //var_dump( $_SESSION['UserName']);
?>

<h2>管理员管理系统</h2>
<a href="index.php" style:" style="text-decoration:none; color:#333; list-style:none;"" >浏览新闻</a> |
<a href="add.php" style="text-decoration:none; color:#333; list-style:none;">发布新闻</a> |
<a href="addUser.php" style="text-decoration:none; color:#333; list-style:none;">添加用户</a> |
<a>欢迎您：<?php 
echo $_SESSION['UserName'];
if(isset($_SESSION['UserName'])){
					echo $_SESSION['UserName'];}?><a/> |
<hr width="90%"/>