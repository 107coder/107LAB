
<head>
<?php header('content-type:text/html;charset=utf8');?>
    <title>Welcome Super Administrator</title>
    <script type="text/javascript">
			function dodel(id){
				if(confirm("确定要删除吗？")){
					window.location="action.php?action=dell&id="+id;
				}
			}
    </script>
    </head>
	<body>
		<center>
			<?php include("menu2.php"); //导入导航栏 ?>
			<h3>管理用户</h3>
			<table width="880" border="1">
				<tr>
                <th>id</th>
					<th>用户账号</th><th>性别</th>
					<th>用户邮箱</th><th>权限</th>
				</tr>
				<?php
					//1.导入配置文件
						require("dbconfig.php");
						
					//2.连接MySQL，选择数据库
						$passwordc='';
	                    $userss='root';
	                    $loaddd='localhost';
	                    $link = @mysqli_connect($loaddd,$userss,$passwordc) or die("数据库连接失败！");
						mysqli_select_db($link,'liuzihan');
						mysqli_set_charset($link, "utf8");
						//mysql_query("set names 'utf8'");
						
					//3. 执行查询，并返回结果集
						$sql = "select id,userid,sex,email from userload ";
						$results = mysqli_query($link,$sql);
						
                    //4. 解析结果集,并遍历输出
                    //var_dump($sql);
                    //var_dump($results);
						while($row = mysqli_fetch_assoc($results)){
							echo "<tr>";
							echo "<td>{$row['id']}</td>";
							echo "<td>{$row['userid']}</td>";
							echo "<td>{$row['sex']}</td>";
							echo "<td>{$row['email']}</td>";
							echo "<td>
								<a href='javascript:dodel({$row['id']})'>删除</a>";
                            echo "</tr>";
                           // <a href='edit.php?id={$row['id']}'>修改</a></td>
						}
					//5. 释放结果集
						mysqli_free_result($results);
						mysqli_close($link);
				?>
				<form action="addd.php? act=exsit" method="post" >
                <input type="submit" name=""  value="退出登录"/>
                </form>
			</table>
		</center>
	</body>
</html>