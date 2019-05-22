<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/public.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/active.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <title>心理健康工作站-计算机与信息工程学院</title>
</head>
<body>
    <?php include "header.php"; ?>
    <h1 align="center">查看用户信息</h1>
    <center>
        <?php
            header("content-type:text/html;charset=utf-8");//设置字符编码吧
            //通过php连接到mysql数据库
            $mysqli=new mysqli('localhost','root','','demodb');
            //接收表单传递的用户名和密码
            $mysqli->set_charset('utf8');
            $sql="select * from user where username={$_SESSION['curuser']};"; 
            $mysqli_result=$mysqli->query($sql);
            $row=$mysqli_result->fetch_assoc();                   
        ?>        
        <table border="1px" cellpadding="0" width="500px;" height="200px" bgcolor="#abcdef">
            <tr><td>用户名:<?php echo $_SESSION['curuser']; ?></td></tr>
            <tr><td>密码:<?php echo $row['password'] ?></td></tr>
            <tr><td>年龄:<?php echo $row['age'] ?></td></tr>
            <tr><td><?php 
                //判断是否为超级管理员
                if($row['username']=='1812050157'){
                    echo "<a href='userList.php'><button>编辑成员</button></td></tr></a>";
                }else{
                    echo "<a href='editUser.php'><button>修改个人信息</button></td></tr></a>";
                }
            ?><td>  
        </table>
    </center>
    <?php include "footer.php"; ?>
</body>
</html>