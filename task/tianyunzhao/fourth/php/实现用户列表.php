<?php
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8"); 
$mysqli=@new mysqli('localhost','root','root','denglu');
if($mysqli->connect_errno){
	die('connect error:'.$mysqli->connect_erron);
	
}
$sql="select id, username, password from user3";
$mysqli_result=$mysqli->query($sql);
if($mysqli_result&&$mysqli_result->num_rows>0){
	while($row=$mysqli_result->fetch_assoc()){
		$rows[]=$row;
	}
}


?>

<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<title>document</title>
</head>
<body>
<h2>用户列表-<a href="adduser.php?act=adduser&id=<?php echo $row['id']; ?>">添加用户</a>|<a href="index1.php">点击返回</a></h2>
   <table border='1' cellpadding='0' cellspacing='0' width='80%' bgcolor='#ABCDEF'>
      <tr>
	      <td>编号</td>
		  <td>用户名</td>
		  <td>密码</td>
		  <td>操作</td>
	  </tr>
	  <?php $i=1;  foreach($rows as $k=>$row):?>
	   <tr>
	      <td><?php echo $i;?></td>
		  <td><?php echo $row['username'];?></td>
		  <td><?php echo $row['password'];?></td>
		  <td><a href="doaction.php?act=deluser&id=<?php echo $row['id']; ?>">删除</a>|<a href="edituser.php?act=edituser&id=<?php echo $row['id'];?>">更新</a></td>
	  </tr>

	<?php $i++;endforeach;?>

    </table>

</body>
</html>
