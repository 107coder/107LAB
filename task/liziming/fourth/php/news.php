<html>

<head>
	<meta charset="UTF-8">
	<title>新闻管理系统</title>
	<script type="text/javascript">
		function dodel(id) {
			if (confirm("确定要删除吗？")) {
				window.location = "action.php?action=del&id=" + id;
			}
		}
	</script>
	<style>
		body {
			background: url(../images/324182.jpg);
			font-family: "微软雅黑", sans-serif;
			background-size: 100%, 100%;
			background-repeat: no-repeat;
		}
	</style>
</head>

<body>
	<center>
		<?php
		//获取账号密码
		$username = $_POST["username"];
		$password = $_POST["password"]; ?>
		<h2>新闻管理系统</h2>
		<a href="index.php">浏览新闻</a> |
		<a href="release.php">发布新闻</a> |
		<a href="<?php echo "user.php?username=" . $username ?>">管理用户</a>
		<hr width="90%" />
		<h2>浏览新闻</h2>
		<table width="880" border="1">
			<tr>
				<th>新闻id</th>
				<th>新闻标题</th>
				<th>作者</th>
				<th>发布时间</th>
				<th>新闻内容</th>
				<th>操作</th>
			</tr>
			<?php
			require("userdbconfig.php");
			$link = @mysqli_connect(HOST, USER, PASS) or die("数据库连接失败");
			mysqli_select_db($link, DBNAME);
			mysqli_set_charset($link, 'utf8');

			//检测账号密码是否正确
			$sql = "select * from manager where username='$username' and password='$password'";
			$rel = mysqli_query($link, $sql);

			//根据账号密码查询管理员类型type
			$sql3 = "select type from manager where username='$username' and password='$password'";
			$rel2 = mysqli_query($link, $sql3);
			//解析结果集，得到type值
			$type = mysqli_fetch_assoc($rel2);

			if (mysqli_num_rows($rel) > 0)   //如果登录成功
			{
				//1.导入配置文件
				require("newsdbconfig.php");

				//2.连接mysqli，选择数据库
				$link2 = @mysqli_connect(HOST2, USER2, PASS2) or die("数据库连接失败！");
				mysqli_select_db($link2, DBNAME2);
				mysqli_set_charset($link2, 'utf8');

				//3. 执行查询，并返回结果集
				$sql2 = "select * from news order by addtime desc";
				$result = mysqli_query($link2, $sql2);

				//4. 解析结果集,并遍历输出
				while ($row1 = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>{$row1['id']}</td>";
					echo "<td>{$row1['title']}</td>";
					echo "<td>{$row1['author']}</td>";
					echo "<td>" . date("Y-m-d", $row1['addtime']) . "</td>";
					echo "<td>{$row1['content']}</td>";
					echo "<td>
								<a href='javascript:dodel({$row1['id']})'>删除</a>
								<a href='edit.php?id={$row1['id']}'>修改</a>
								<a href='action.php?action=totop&id={$row1['id']}'>置顶</a></td>";
					echo "</tr>";
				}
				//5. 释放结果集
				mysqli_free_result($result);
				mysqli_close($link2);
			} else {
				echo "<script>
					   alert('登录失败！请重新登录！');
					   location.href='login.php';
					   </script>";
			}
			?>
		</table>
	</center>
	<div style="margin-left:60%"><?php
									if ($type['type'] == 0) {
										echo "你好，管理员$username";
									} else if ($type['type'] == 1) {
										echo "你好，超级管理员$username";
									} ?>
		<a>&nbsp;&nbsp;&nbsp;</a><a href="login.php">点击退出</a><a>&nbsp;&nbsp;&nbsp;</a>
		<a href="<?php echo "changepassword.php?username=" .$username ?>">修改密码</a></div>
</body>

</html>