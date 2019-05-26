<html>
    <head>
        <title>新闻管理</title>
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
                <?php include("menu.php");         ?>
                <h3>浏览新闻</h3>
                <table width="800px" border="1">
                <tr>
                    <th>新闻id</th><th>新闻标题</th><th>关键字</th>
                    <th>作者</th><th>发布时间</th><th>新闻内容</th>
                    <th>操作</th>

                </tr>
                <?php

                    require("dbconfig.php");

                    $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
                    mysqli_select_db($link,"newsdb");
                    mysqli_set_charset($link, "utf8");

                    $sql = "select* from news order by puttime desc";
                    $result = mysqli_query($link,$sql);

                    while($row = mysqli_fetch_assoc($result)){

                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['news_title']}</td>";
                        echo "<td>{$row['keywords']}</td>";
                        echo "<td>{$row['author']}</td>";
                        echo "<td>".date("Y-m-d",$row['puttime'])."</td>";
                        echo "<td>{$row['content']}</td>";
                        echo "<td>
								<a href='javascript:dodel({$row['id']})'>删除</a>
                                <a href='edit.php?id={$row['id']}'>修改</a>
                                <a href='setTop.php?id={$row['id']}'>置顶</a>
                                <a href='noTop.php?id={$row['id']}'>取消置顶</a></td>";
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