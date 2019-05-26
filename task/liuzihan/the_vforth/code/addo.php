<html>
<head>
    <title>新闻管理系统</title>
</head>
<body>
    <center>
        <?php include("menu.php"); //导入导航栏 
        header('content-type:text/html;charset=utf-8');
        //1. 导入配置文件
					require("dbconfig.php");
					
				//2. 连接MySQL、选择数据库
					$link = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
					mysqli_select_db($link,DBNAME);
					mysqli_set_charset($link, "utf8");
					
				//3. 获取要修改信息的id号，并拼装查看sql语句，执行查询，获取要修改的信息
					$sql = "select * from content";
					$result = mysqli_query($link,$sql);
					
				//4. 判断是否获取到了要修改的信息
					if($result && mysqli_num_rows($result)>0){
						$content = mysqli_fetch_assoc($result);
					}else{
						die("没有找到要修改的信息！");
					}
        ?>
        
        <h3>更改简介</h3>
        <form action="action.php?action=conter" method="post">
<table width="400" border="0">
        <tr>
						<td align="right" valign="top">内容:</td>
						<td><textarea cols="40" rows="20" name="content"><?php echo $content['content']; ?></textarea></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="编辑"/>&nbsp;&nbsp;
							<input type="reset" value="重置"/>
                        </td>
</table>
</form>