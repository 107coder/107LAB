<?php
//表单进行了提交处理
    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DBNAME","admin");
    $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
    mysqli_select_db($link,"admin");
    mysqli_set_charset($link, "utf8");

    $username = trim($_POST['username']);//mysql_real_escape_string()进行过滤
    $password = trim($_POST['password']);
    $repassword = trim($_POST['repassword']);
    if(isset($username)){
        $search = "select username from admins where username='$username';";
        $res=mysqli_query($link, $search);
        if(mysqli_num_rows($res)>0){
        echo "<script>alert('用户名已经存在！')</script>",
        header('refresh:2;url=register.php');
        }else {
        $sql="insert into `admins`(`id`,`username`,`password`) values (null,'".$_POST['username']."','".$_POST['password']."')";
        if(mysqli_query($link,$sql)){
            echo '注册成功！', header("location: ../regiter/login.php");
        }else{
            echo '失败，请重新尝试!',mysqli_error();
        }
        die;
    }
  }
?>