<html>
	<head>
	<meta charset="UTF-8">
		<title>用户管理界面</title>
		<script type="text/javascript">
			function dodel(id){
				if(confirm("确定要删除吗？")){
					window.location="action1.php?action1=del&id="+id;
				}
			}
		
		</script>

	</head>
	<body>
		<center>
			<?php include("menu0.php"); //导入导航栏?>
			
			<h2>管理用户</h2>
			<table width="880" border="1">
				<tr>
					<th>id</th><th>用户名</th><th>密码</th><th>操作</th>
				</tr>
			<?php
			require("superuserdbconfig.php");
				$link3 = @mysqli_connect(HOST3,USER3,PASS3)or die("数据库连接失败");
				mysqli_select_db($link3,DBNAME3);
				mysqli_set_charset($link3,'utf8'); 
				//获取账号密码
				$superusername=$_POST["superusername"];
				$superpassword=$_POST["superpassword"];

				//如果登录成功
				/*$sql3="select * from supermanager where superusername='$superusername' and superpassword='$superpassword'" ;
				$rel3=mysqli_query($link3,$sql3);
				if(mysqli_num_rows($rel3)>0)*/
				{
					//1.导入配置文件
						require("userdbconfig.php");
						
					//2.连接mysqli，选择数据库
						$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
						mysqli_select_db($link,DBNAME);
						mysqli_set_charset($link,'utf8'); 
						
					//3. 执行查询，并返回结果集
						$sql = "select * from manager order by id desc";
						$result1 = mysqli_query($link,$sql);
						
					//4. 解析结果集,并遍历输出
						while($row1 = mysqli_fetch_assoc($result1)){
							echo "<tr>";
							echo "<td>{$row1['id']}</td>";
							echo "<td>{$row1['username']}</td>";
							echo "<td>{$row1['password']}</td>";
							echo "<td>
								<a href='javascript:dodel({$row1['id']})'>删除用户</a>
								<a href='edit1.php?id={$row1['id']}'>修改用户信息</a></td>";
							echo "</tr>";
						}
					//5. 释放结果集
						mysqli_free_result($result1);
						mysqli_close($link);
						}/*else{
					echo "<script>
					   alert('登录失败！请重新登录！');
					   location.href='super-login.php';
					   </script>";
				}*/
			?>
			</table>
		</center>
		<div style="margin-left:70%"><?php echo '你好，'.$superusername?><a>&nbsp;&nbsp;&nbsp;</a><a href="super-login.php">点击退出</a></div>
	</body>
</html>