<?php
    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DBNAME","admin");

    $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
    mysqli_select_db($link,"admin");
    mysqli_set_charset($link, "utf8");

    
    session_start();
    
    //1. 获取要修改的信息
    $username = $_POST["username"];
    $password = $_POST["password"];
    $truename = $_POST["truename"];
				
	//2. 过滤要修改的信息（省略）
    //3. 拼装修改sql语句，并执行修改操作
    $sql = "update admins set username='{$username}',password='{$password}',truename='{$truename}',where username= '{$_SESSION['username']}'";
    echo "{$_SESSION['username']}";
	var_dump(mysqli_query($link,$sql));
	if(mysqli_query($link, $sql))
        echo "<script>history.go(-1);</script>";
    


    //（4）、关闭数据连接
    mysqli_close($link);
?>