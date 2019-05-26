<html>
    <head>
        <title>管理员管理</title>
        <script type="text/javascript">
			function dodel(id){
				if(confirm("确定要删除吗？")){
					window.location="action.php?action=del&id="+id;
				}
			}
		
		</script>
    </head>
    <body>
        <div>
            <center>
                <div width="90%">
                    <div width="200px" margin="auto">
                        <h2>管理员管理</h2>
                        <a href="add.php">添加管理员</a>
                    </div>
                    <hr width="90%"/>
                </div>
                <h3>管理员列表</h3>
                <table width="800px" border="1">
                <tr>
                    <th>管理员id</th><th>管理员名</th><th>密码</th>
                    <th>真实姓名</th><th>状态</th><th>登录时间</th>
                    <th>操作</th>

                </tr>
                <?php

                define("HOST","localhost");
                define("USER","root");
                define("PASSWORD","");
                define("DBNAME","admin");

                $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
                    mysqli_select_db($link,"admin");
                    mysqli_set_charset($link, "utf8");


                    $sql = "select* from superadmins order by create_time desc";
                    $result = mysqli_query($link,$sql);

                    while($row = mysqli_fetch_assoc($result)){

                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['username']}</td>";
                        echo "<td>{$row['password']}</td>";
                        echo "<td>{$row['truename']}</td>";
                        echo "<td>{$row['status']}</td>";
                        echo "<td>".date("Y-m-d",$row['create_time'])."</td>";
                        echo "<td>
                                <a href='edit.php?id={$row['id']}'>修改</a>
								<a href='javascript:dodel({$row['id']})'>删除</a></td>";
						echo "</tr>";

                    }
                    mysqli_free_result($result);
                    mysqli_close($link);

                    ?>

                </table>
                
            </center>
        </div>
    </body>
</html>