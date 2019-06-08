<?php
header('content-type:text/html;charset=utf-8');
$mysqli=new mysqli('localhost','root','','test');
if($mysqli->connect_errno){
    die ('connect error :'.$mysqli->connect_error);
}
$mysqli->set_charset('utf-8');
$sql="select id,username,age from user";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
    while ($row=$mysqli_result->fetch_assoc()){
       $rows[]=$row;
    }
    //释放结果集
    //$mysqli_result->free_result();
}
//print_r($rows);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户列表</title>
</head>
<body>
    <h2 align="center">用户列表-<a href="addUser.php">添加用户</a></h2>
        <table border='1' cellpadding='0' cellspacing='0' width='80%' align="center">
            <tr>
                <td>编号</td>
                <td>用户名</td>
                <td>年龄</td>
                <td>操作</td>
            </tr>
            <?php  $i=1; foreach($rows as $row):?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['age'];?></td>
                <td>
                    <a href="editUser.php?id=<?php echo $row['id'];?>">更新</a>
                    <a href="doAction.php?act=delUser&id=<?php echo $row['id'];?>">删除</a>
                </td>
            </tr>
            <?php $i++; endforeach;?>
        </table>
</body>
</html>
