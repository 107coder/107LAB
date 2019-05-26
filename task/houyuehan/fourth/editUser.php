<?php
session_start(); 
//error_reporting(E_ALL^E_NOTICE);
header('content-type:text/html;charset-utf-8');
$mysqli=new mysqli('localhost','root','','demodb');
if($mysqli->connect_error){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
    
if($_SESSION['curuser']=='1812050157'){
    $id=$_GET['id'];
    $sql="select id,username,password,age from user where id=".$id;
    $mysqli_result=$mysqli->query($sql);
    if($mysqli_result&&$mysqli_result->num_rows>0){
        $row=$mysqli_result->fetch_assoc();
    }
}else if($_SESSION['curuser']!='1812050157'){
    $sql="select id,username,password,age from user where username=".$_SESSION['curuser'];
    $mysqli_result=$mysqli->query($sql);
    if($mysqli_result&&$mysqli_result->num_rows>0){
        $row=$mysqli_result->fetch_assoc();
    }
}

//print_r($row);

?>
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
    <title>编辑用户</title>
</head>
<body>
    <?php include "header.php"; ?>
    <h2>编辑用户</h2>
    <form action="user-doAction.php?act=editUser&id=<?php echo $id; ?>" method="post">
    <table border='1px' cellpadding='0' cellspacing='0' width='80%' bgcolor='#abcdef'>
        <tr>
            <td>用户名</td>
            <td><input type="username" name="username" id="" value="<?php echo $row['username']; ?>" required='required'></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="password" id="" placeholder="请输入合法密码" required='required'></td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="age" name="age" id="" value="<?php echo $row['age']; ?>" required='required'></td>
        </tr>
        <tr>
            <td colapan='2'><input type="submit" value="编辑用户"></td>
        </tr>
    </table>
    </form>
    <?php include "footer.php"; ?>
</body>
</html>