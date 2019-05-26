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
    <title>新闻详细信息</title>
</head>
<body>
    <?php 
    //连接数据库
    //header('content-type:text/html;charset-utf-8');
    $mysqli=new mysqli('localhost','root','','demodb');
    $id=$_GET['id'];
    if($mysqli->connect_error){
        die('CONNECT ERROR:'.$mysqli->connect_error);
    }
    $mysqli->set_charset('utf8');
    
    $sql="select * from newsdb where id=".$id;
    $mysqli_result=$mysqli->query($sql);
    $cur_news=$mysqli_result->fetch_assoc();
        include "header.php"; 
        echo "<center><h2>";
        print_r($cur_news['title']);
        echo "</h2>";
        echo "<p>";
        print_r($cur_news['keywords']);
        echo "</p>";
        echo "<p>作者：";
        print_r($cur_news['author']);
        echo "</p>";
        echo "<p>";
        print_r($cur_news['content']);
        echo "</p></center>";

        include "footer.php";
?>

</body>
</html>