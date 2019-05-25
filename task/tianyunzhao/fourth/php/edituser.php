<?php
header("Content-Type: text/html; charset=UTF-8"); 
$mysqli= new mysqli('localhost','root','root','denglu');
if($mysqli->connect_errno){
	die($mysqli->connect_error);
}
$mysqli->set_charset('utf8');

$id=@$_GET['id'];


$sql="select id,username,password from user3 where id=".$id;
$mysqli_result=$mysqli->query($sql);
if($mysqli_result && $mysqli_result->num_rows>0){
	$row=$mysqli_result->fetch_assoc();
}

?>

<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>document</title>
</head>
<body>
<h2>编辑用户</h2>
  <form action="doaction.php?act=edituser&id=<?php echo $id;?>" method='POST'>
      <table border='1' cellpadding='0' cellspacing='0' bgcolor='#ABCDEF' width='80%'>
	       <tr>
		      <td>用户名</td>
			  <td><input type="text" name="username" id="" value="<?php  echo $row['username'];?>" required='required' /></td>
		   </tr>
		    <tr>
		      <td>密码</td>
			  <td><input type="password" name="password" id="" placeholder='请输入密码' required='required'/></td>
		   </tr>
		    
		    <tr>
		      <td colspan='2' ><input type="submit" value="编辑用户"/></td>

		   </tr>
	  </table>
</body>
</html>
