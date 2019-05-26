<?php
require("dbconfig.php");

$link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
mysqli_select_db($link,"newsdb");
mysqli_set_charset($link, "utf8");
$settop = "update news set top = 1 where id= {$_GET['id']} limit 1";
if(mysqli_query($link,$settop))
 echo "<script>history.go(-1);</script>";
?>