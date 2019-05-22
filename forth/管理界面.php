<?php
require("dbconfig.php");
$link = @mysqli_connect(HOST,USER,PASS)or die("数据库连接失败");
mysqli_select_db($link,DBNAME);
$sql="select id,username,password from manager";
$rel=mysqli_query($link,$sql);
if($rel&&$rel->num_rows>0){
	while($row=$rel->fetch_assoc()){
		$rows[]=$row;
	    }
}
?>
<html>
<head>
<title>Document</title>
</head>
<body>
<center>
		<h2>用户列表-<a href="添加.html" >添加用户</a>|<a href="更新.html">修改用户</a>|<a href="删除.html">删除用户</a></td></h2>
		<table border='1' cellpadding='0' cellspacing='0' width='80%' bgcolor='#ABCDEF'>
			<tr>
			    <td>编号</td>
				<td>用户名</td>
				<td>密码</td>
				<td>操作</td>
			
			</tr>
			<?php $i=1;foreach($rows as $row):?>
			<tr>
			<td><?php echo $i;?> </td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['password'];?></td>
			<td><a href="更新.html">修改</a>|<a href="mod.php?act=deluser&账号=<?php echo $row['username'];?>">删除</a></td>
			
			</tr>
			<?php $i++;endforeach;?>
		</table>
		<h2><a href="NEWSindex.php">新闻管理</a></h2>
		<h2><a href="INTaction.php">简介介绍管理</a></h2>
		<h2><a href="登录.html">退出</a></h2>
</center>
</body>
</html>