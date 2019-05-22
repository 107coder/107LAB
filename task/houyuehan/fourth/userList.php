<?php
header('content-type:text/html;charset-utf-8');
$mysqli=new mysqli('localhost','root','','demodb');
if($mysqli->connect_error){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$sql="select id,username,age from user;";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
    while($row=$mysqli_result->fetch_assoc()){
        $rows[]=$row;
    }
//print_r($rows);
}
$mysqli->set_charset('utf8');
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
    <title>心理健康工作站-计算机与信息工程学院</title>
</head>
<body>
    <?php include "header.php"; ?>
    <h2 align=>用户列表-<a href="addUser.php" style="color:#3C93ED">添加用户</a></h2>
    <table border='1px' cellpadding='0' cellspacing='0' width=80%; bgcolor='#abcdef'>
        <tr>
            <td>编号</td>
            <td>用户名</td>
            <td>年龄</td>
            <td>操作</td>
        </tr>
        <?php $i=1; foreach($rows as $row): ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td>
                <a href="editUser.php?id=<?php echo $row['id']; ?>">更新</a>
                <a href="user-doAction.php?act=delUser&id=<?php echo $row['id']; ?>"> 删除</a></td>
        </tr>
        <?php $i++;endforeach; ?>
    </table>
    <?php include "footer.php"; ?>
</body>
</html>