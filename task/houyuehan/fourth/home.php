<?php 
session_start(); 
header("content-type:text/html;charset=utf-8");//设置字符编码吧
//通过php连接到mysql数据库
$mysqli=new mysqli('localhost','root','','demodb');
//返回用户信息字符集
$mysqli->set_charset('utf8');
//接收表单传递的用户名和密码
if(!isset($_SESSION['curuser'])){
$username=$_POST['username'];//$_POST[],获取前端表单传回来的数据，并且是通过input的name属性值来获取
$password=$_POST['password'];//以下同上
$_SESSION['curuser']=$username;        
        //$sql = "SELECT * FROM user WHERE (username='$username') AND (password='$password');";
        $sql="select * from user where username='$username' and password='$password';";
        $mysqli_result = $mysqli->query($sql);
            if($mysqli_result&& $mysqli_result->num_rows>0){
                echo "<script>
                    alert('登录成功');
                    </script>";
            }
            else{
                echo "<script>
                    alert('没有此用户，请注册后登录');
                    location.href='register.php';
                   </script>";
            }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/public.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/active.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <title>心理健康工作站-计算机与信息工程学院</title>
</head>
<body>
    <div class="body">
        <?php include "header.php"; 
        echo "<div class='suer-mes' style='position: absolute;top: 100px; border: 1px solid red; right: 70px;'>
        用户名：<span class='cur_user'>".$_SESSION['curuser']."</span></div>";
        ?>
                   <script>
                        //var $cur_user=$('.cur_user')[0].innerHTML;
                    </script>
        <!--bootstrap start-->
        <div class="bootstarp">
            <div class="bootstarp-img">
                <ul>
                    <li>
                        <img src="images/image1.jpg">
                    </li>
                    <li>
                        <img src="images/image2.jpg">
                    </li>
                    <li>
                        <img src="images/image3.jpg">
                    </li>
                    <li>
                        <img src="images/image4.jpg">
                    </li>
                </ul>
            </div>
            <div class="bootstarp-choose">
                <ol>
                    <li>
                        <img src="images/image_dot.png">
                    </li>
                    <li>
                        <img src="images/image_dot.png">
                    </li>
                    <li>
                        <img src="images/image_dot.png">
                    </li>
                    <li>
                        <img src="images/image_dot.png">
                    </li>
                </ol>
            </div>
        </div>
        <!--bootstrap end-->
        <div class="midlle-line"></div>
        <!--content start-->
        <div class="main">         
            <div class="main-content">
                <div class="main-content-pic">
                    <img class="hide" src="images/news_image1.jpg">
                    <img src="images/news_image2.jpg">
                    <ol>
                        <li class="ol-current">1</li>
                        <li>2</li>
                    </ol>
                </div>
                <div class="main-content-news">
                    <a href="news.php"><h3>新闻公告</h3></a>
                    <div class="main-content-news-detail">                       
                    <ul>
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
                        $i=0;
                        while($row[$i]=$mysqli_result->fetch_assoc()){
                            $i++;

                        };
                            
                            echo "
                            <li>
                                <img src='images/list_icon.png'>
                                <a href='news-detail.php?id={$row[0]['id']}'>"; 
                                print_r($row[0]['title']);
                                echo "</a><img style='width: 60px;height: 26px' src='images/hot.png'>
                            </li>
                            <li>
                                <img src='images/list_icon.png'>
                                <a href='news-detail.php?id={$row[1]['id']}''>";
                                print_r($row[1]['title']);                              
                            echo "</a></li>
                            <li>
                                <img src='images/list_icon.png'>
                                <a href='news-detail.php?id={$row[2]['id']}''>";
                                print_r($row[2]['title']);
                            echo "</a></li>
                            </li>
                            </li>
                            <li>
                                <img src='images/list_icon.png'>
                                <a href='news-detail.php?id={$row[3]['id']}''>";
                                print_r($row[3]['title']);
                            echo "</a></li>
                            </li>
                            <li>
                                <img src='images/list_icon.png'>
                                <a href='news-detail.php?id={$row[4]['id']}''>";
                                print_r($row[4]['title']);
                            echo "</a></li>
                            <li>
                                <img src='images/list_icon.png'>
                                <a href='news-detail.php?id={$row[5]['id']}''>";
                                print_r($row[5]['title']);
                            echo "</a></li>
                            <li>
                                <img src='images/list_icon.png'>
                                <a href='news-detail.php?id={$row[6]['id']}''>";
                                print_r($row[6]['title']);
                            echo "</a></li>
                            <li>
                                <img src='images/list_icon.png'>
                                <a href='news-detail.php?id={$row[7]['id']}''>";
                                print_r($row[7]['title']);
                            echo "</a></li>"; ?>
                        </ul>
                    </div>
                </div>
                <div class="main-content-introduce">
                    <h3>中心简介</h3>
                    <div class="main-content-introduce-detail">
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php 
                            //连接数据库
                                $mysqli=new mysqli('localhost','root','','demodb');
                                if($mysqli->connect_error){
                                    die('CONNECT ERROR:'.$mysqli->connect_error);
                                }
                                $mysqli->set_charset('utf8');
                                $sql="select content from MSC";
                                $mysqli_result=$mysqli->query($sql);
                                $con=$mysqli_result->fetch_assoc();
                                print_r($con['content']);
                            ?>
                        <a href="introduction.php">详细</a></p>
                    </div>
                </div>
                <div class="main-content-tab">
                    <!--div class="main-content-tab-title">-->
                        <ul>
                            <li class="current"><h3>心理百科</h3></li>
                            <li><h3>心理保健</h3></li>
                            <li><h3>心理咨询</h3></li>
                        </ul>
                    <!--/div>-->
                    <div class="main-content-tab-detail">
                        <ul>
                            <li>
                                <img src="images/list_tabicon.png">
                                春季常见的十种异常心理
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                一张图分清抑郁症和抑郁情绪
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                无论你说什么都会否定你的人，都是什么心态？
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                焦虑的本质是对失控的恐惧<span>|</span>如何克服你的焦虑？
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                失眠的背后，也许是对关系的渴望
                            </li>
                        </ul>
                        <ul class="hide">
                            <li>
                                <img src="images/list_tabicon.png">
                                百合花开
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                愿你纵马天涯，归来仍满身豪情
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                爱，是遥远而咫尺的距离（散文诗）
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                有一种幸福叫“平平安安”
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                认识自己和他人
                            </li>
                        </ul>
                        <ul class="hide">
                            <li>
                                <img src="images/list_tabicon.png">
                                心理咨询的过程
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                心理咨询的分类和形式
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                心理咨询与心理治疗的关系
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                心理咨询与治疗的注意事项
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                心理疾病的药物常识及其注意事项
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-content-download">
                    <h3>下载中心</h3>
                    <div class="main-content-download-detail">
                        <ul>
                            <li>
                                <img src="images/list_tabicon.png">
                                初始转介记录单(转介至心理中心)
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                个体心理咨询协议书
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                瑞格智能身心反馈训练系统--训练...
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                向校外转介学生辅导员联系书
                            </li>
                            <li>
                                <img src="images/list_tabicon.png">
                                心理危机学生报表
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--content end-->
        <?php include "footer.php"; ?>
        <div class="totop">
            <a href="#">
                <img src="images/totop.png">
                <div>
                    <p>回到顶部</p>
                </div>
            </a>  
        </div>

        <img class="float" src="images/dada.png">
        
    </div>
</body>
</html>