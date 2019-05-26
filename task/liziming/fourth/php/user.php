<html>

<head>
	<meta charset="UTF-8">
	<title>用户管理界面</title>
	<style>
		body {
			background: url(../images/324328.jpg);
			font-family: "微软雅黑", sans-serif;
			background-size: 100%, 100%;
			background-repeat: no-repeat;
		}
	</style>


</head>

<body>
	<center>
		<h2>用户信息</h2>
		<table width="580" border="1">
			<tr>
				<th>用户名</th>
				<th>密码</th>
				<th>操作</th>
			</tr>
			<?php
			require("userdbconfig.php");
			$link = @mysqli_connect(HOST, USER, PASS) or die("数据库连接失败");
			mysqli_select_db($link, DBNAME);
			mysqli_set_charset($link, 'utf8');
			//获取账号
			$username = $_GET["username"];

			//根据账号密码查询管理员类型type
			$sql3 = "select type from manager where username='$username'";
			$rel2 = mysqli_query($link, $sql3);
			//解析结果集，得到type值
			$type = mysqli_fetch_assoc($rel2);
			//判断该账号是否为超级管理员账号，如果是，进入用户管理界面，否则提示“您不是超级管理员”
			if ($type['type'] == 1) {       //是超级管理员
				//1.查询结果集
				$sql = "select * from manager";
				$result = mysqli_query($link, $sql);
				//2. 解析结果集,并遍历输出
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>{$row['username']}</td>";
					echo "<td>{$row['password']}</td>";
					echo "<td>
								<a href='user-action.php?action=del&username={$row['username']}&ppusername={$username}'>删除用户</a>
								<a href='manage.php?username={$row['username']}&ppusername={$username}'>修改用户信息</a></td>";
					echo "</tr>";
				}
				//3. 释放结果集
				mysqli_free_result($result);
				mysqli_close($link);
			} else {
				echo '您没有查看用户信息的权限';
			}
			?>
			</table>
		</center>
		<div style="margin-left:70%"><?php
		if($type['type']==0)
		{
			echo "你好，管理员$username";
		}else if($type['type']==1){
			echo "你好，超级管理员$username";
		}?>
		<a>&nbsp;&nbsp;&nbsp;</a><a href="login.php">点击退出</a></div>
	</body>

</html>