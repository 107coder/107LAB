<?php
header('Content-Type: text/html;charset=UTF-8');
?>
<html>
<head>
	<title>新闻管理系统</title>
</head>
<body>
	<center>
		<?php include("menu2.php"); //导入导航栏 ?>
		
		<h3>发布新闻</h3>
		<form action="action.php?action=add" method="post">
			<table width="320" border="0">
				<tr>
					<td align="right">标题:</td>
					<td><input type="text" name="title"/></td>
				</tr>
				<tr>
					<td align="right">关键字:</td>
					<td><input type="text" name="keywords"/></td>
				</tr>
				<tr>
					<td align="right">作者:</td>
					<td><input type="text" name="author"/></td>
				</tr>
				<tr>
					<td align="right" valign="top">内容:</td>
					<td><textarea cols="25" rows="5" name="content"></textarea></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="添加"/>&nbsp;&nbsp;
						<input type="reset" value="重置"/>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>