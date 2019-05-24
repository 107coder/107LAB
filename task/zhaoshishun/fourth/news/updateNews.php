<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改新闻</title>
<link rel="stylesheet" href="../admin/css/update.css">


</head>
<body>
    <?php require_once './menu.php'; ?>

    <div class="update">

    <img class="back" src="../4/images/henu4.jpg"><img>
                    <!--表格-->
                 
                       
                            <?php
                                header("Content-Type: text/html;charset=utf-8");
                                //建立连接
                                require("../data/config.inc.php");
                                $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
                                $select = mysqli_select_db($conn,DBNAME);       //选择数据库


                                //执行查询   
                                $sql="select * from news where news_id={$_GET['news_id']}"; 
                                mysqli_query($conn,'SET NAMES UTF8');
                                $result= mysqli_query($conn,$sql);
                                if($result&&mysqli_num_rows($result)>0){
                                    $news=mysqli_fetch_assoc($result);
                             }
                             ?>
            <div class="updateForm">
           <form action = "./newsAction.php?action=update&news_id=<?php echo $news['news_id'];?>" method = "post">
                <div class="id">id:&nbsp&nbsp&nbsp<?php echo $news["news_id"];?></div>
                <div class="input1">新闻标题:<input type="text" name="title" value=' <?php echo $news["title"];?>'></div> 
                <div class="input2">新闻内容:<input type="text" name="content" value=' <?php echo $news["content"];?>'></div>
                <div class="sub"><input type="submit" value="确认修改" name="subr"></div>
            </form>

        </div>
                            
    </div>                          
                           
                
</body>
<script type="text/javascript">
  
</script>
</html>