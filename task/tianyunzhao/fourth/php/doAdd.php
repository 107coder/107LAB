<?php
header('Content-Type: text/html;charset=UTF-8');
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>我的留言板</title>
</head>
<body>
   <center>
       <h2>我的留言版</h2>
       <a href="index.php">添加留言</a>
       <a href="show.php">查看留言</a>
       <hr width="90%"/>
       <h3> 添加留言</h3>
       <?php
       //执行留言信息添加操作
      
       //1.获取添加的留言信息，并且补上其他辅助信息（ip地址，添加时间）
       $title =  $_POST['title'];//获取留言标题
       
       $author =  $_POST["author"];//获取留言者
       $content =  $_POST["content"];//获取留言内容
       $ip= $_SERVER["REMOTE_ADDR"];//ip地址
       $addtime = time();//获取添加时间
       //2.组装（拼装）留言信息
       $ly = "{$title}##{$author}##{$content}##{$ip}##{$addtime}@@@";
       $s = json_encode($ly);
       //echo $s;
       //3.将留言信息追加到liuyan.txt文件中
       $info = file_get_contents("liuyan.txt");
       file_put_contents("liuyan.txt",$info.$s);
       //4.输出留言成功ss
       echo "留言成功";
       ?>
   </center>
</body>
</html>