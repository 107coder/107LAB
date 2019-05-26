<html>
    <head>
        <title>中心简介</title>
    </head>
    <body>
        <div>
            <center>
                <div width="90%">
                    <div width="200px" margin="auto">
                        <h2>中心简介</h2>
                        <a href="add.php">添加内容</a>
                    </div>
                    <hr width="90%"/>
                </div>        
                <h3>中心简介</h3>
                <table width="800px" border="1">
                <tr>
                    <th>中心id号</th>
                    <th>网站标题</th>
                    <th>简介内容</th>
                    <th>操作</th>

                </tr>
                <?php

                    require("../dbconfig.php");

                    $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
                    mysqli_select_db($link,"newsdb");
                    mysqli_set_charset($link, "utf8");

                    $sql = "select* from center_con order by id desc";
                    $result = mysqli_query($link,$sql);

                    while($row = mysqli_fetch_assoc($result)){

                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['title']}</td>";
                        
                        echo "<td>{$row['content']}</td>";
                        echo "<td>
								
                                <a href='edit.php?id={$row['id']}'>修改</a>
                                </td>";
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