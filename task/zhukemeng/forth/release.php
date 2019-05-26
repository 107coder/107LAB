<html>
	<head>
	    <meta charset="UTF-8">
		<title>新闻管理系统</title>
		<style>
		body{
			background:url(../images/324181.jpg);
            font-family: "微软雅黑", sans-serif;
            background-size: 100%,100%;
            background-repeat: no-repeat;
		}
		</style>
	</head>
	<body>
		<center>
			<?php include("menu.php"); //导入导航栏 ?>
			
			<h3>发布新闻</h3>
			<form action="action.php?action=add" method="post">
				<table width="620" border="0">
					<tr>
						<td align="right">标题:</td>
						<td><input type="text" name="title" style="width:360px"/></td>
					</tr>
					<tr>
						<td align="right">作者:</td>
						<td><input type="text" name="author" style="width:360px"/></td>
					</tr>
					<tr>
						<td align="right" valign="top">内容:</td>
						<td><textarea cols="48" rows="10" name="content"></textarea></td>
					</tr>
					<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="添加"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" value="重置"/>
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>