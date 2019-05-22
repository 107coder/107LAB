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
    <title>Document</title>
</head>
<body>
    <?php include "header.php"; ?>
    <h2>添加用户</h2>
    <form action="user-doAction.php?act=addUser" method="post">
    <table border='1px' cellpadding='0' cellspacing='0' width='80%' bgcolor='#abcdef'>
        <tr>
            <td>用户名</td>
            <td><input type="username" name="username" id="" placeholder="请输入合法用户名" required="required"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="password" id="" placeholder="请输入合法密码" required="required"></td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="age" name="age" id="" placeholder="请输入合法年龄" required="required"></td>
        </tr>
        <tr>
            <td colapan='2'><input type="submit" value="添加用户"></td>
        </tr>
    </table>
    </form>
    <?php include "footer.php"; ?>
</body>
</html>


<?php
$mysqli=new mysqli('localhost','root','','demodb');
if($mysqli->connect_error){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
?>