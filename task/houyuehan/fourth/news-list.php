<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/public.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/active.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <title>新闻管理系统</title>
    <script type="text/javascript">
        function dodel(id){
            if(confirm("确定要删除吗？")){
                window.location="news-action.php?act=del&id="+id;
            }
        }
    </script>

</head>
<body>
    <?php include "header.php"; ?>
        <center>
            <?php include "news-menu.php"; ?>
            <h3>浏览新闻</h3>
            <form action="news-action.php?act=add" method="post">
                <table width="1000px" border="1px">
                    <tr>
                        <th>新闻id</th>
                        <th>新闻标题</th>
                        <th>关键字</th>
                        <th>作者</th>
                        <th>发布时间</th>
                        <th>新闻内容</th>
                        <th>操作</th>
                    </tr>
                    <?php
                    //连接数据库
                    //header('content-type:text/html;charset-utf-8');
                    $mysqli=new mysqli('localhost','root','','demodb');
                    if($mysqli->connect_error){
                        die('CONNECT ERROR:'.$mysqli->connect_error);
                    }
                    $mysqli->set_charset('utf8');

                    $sql="select * from newsdb order by hot,addtime desc;";
                    $mysqli_result=$mysqli->query($sql);

                    /*if($res){
                        echo "成功";
                    }else{
                        echo '失败';
                    }*/
                    //解析结果集，并遍历输出
                    while($row=$mysqli_result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['title']}</td>";
                        echo "<td>{$row['keywords']}</td>";
                        echo "<td>{$row['author']}</td>";
                        echo "<td>".date("Y-m-d",$row['addtime'])."</td>";
                        echo "<td>{$row['content']}</td>";
                        echo "<td>
                            <a href='javascript:dodel({$row['id']})'>删除</a> 
                            | <a href='news-edit.php?act=update&id={$row['id']}'> 修改</a>
                            </td>";
                        
                        echo "</tr>";
                    }

                    //释放结果集，关闭数据库
                    $mysqli->close();
                    ?>
                </table>
            </form>
        </center>
        <?php include "footer.php"; ?>
</body>
</html>
