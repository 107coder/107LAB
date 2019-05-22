<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>newlist-计算机与信息工程学院官网</title>
    <link rel="stylesheet" type="text/css" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/newslist.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/active.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <style>
        a>button{
            float: right;
            width:70px;
            height: 40px;
        }
    </style>
</head>
<body>
    <div class="body">
        <?php include "header.php";?>
        <div class="nowposition">
            <span>当前位置：</span>
            <sapn><a href="home.php">首页</a></sapn>
            <sapn></sapn>
            <sapn><a href="news.php">新闻公告</a></sapn>
        </div>
        <a href='news-list.php'><button>查看</button></a>
        <a href='news-list.php'><button>删除</button></a>
        <a href='news-add.php'><button>添加</button></a>
        <a href='news-list.php'><button>修改</button></a>
        <div class="midlle-line"></div>

        <!--Content Start-->
        <div class="content">
            <div class="content-img">
                <img src="images/newslist.jpg">
            </div>
            <div class="content-list">
                <ul>
                <?php
                        //连接数据库
                        //header('content-type:text/html;charset-utf-8');
                        $mysqli=new mysqli('localhost','root','','demodb');
                        if($mysqli->connect_error){
                            die('CONNECT ERROR:'.$mysqli->connect_error);
                        }
                        $mysqli->set_charset('utf8');

                        
                        $sql="select * from newsdb where hot=0 order by addtime desc;";
                        $mysqli_result=$mysqli->query($sql);

                        while($row=$mysqli_result->fetch_assoc()){
                            echo "<li>
                            <img src='images/list_icon.png'>
                            <a href='news-detail.php?id={$row['id']}'>{$row['title']}</a>
                            <img style='width: 60px;height: 26px' src='images/hot.png'>                                
                            </li>";
                        };

                        $sql="select * from newsdb where hot=1 order by addtime desc;";
                        $mysqli_result=$mysqli->query($sql);
                        while($row=$mysqli_result->fetch_assoc()){
                            echo "<li>
                            <img src='images/list_icon.png'>
                            <a href='news-detail.php?id={$row['id']}'>{$row['title']}</a>
                            </li>";
                        };
                        ?>
                    
                </ul>
                <div class="turnpage">
                    <button>上一页</button>
                    <button>下一页</button>
                    <input>
                    <button>跳转</button>
                </div>
            </div>
        </div>
        <!--Content Start-->
        
        <?php include "footer.php"; ?>
        <img class="float" src="images/dada.png">
        
    </div>
</body>
</html>