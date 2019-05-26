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
       <h3> 删除留言</h3>
       <?php
       //执行留言信息添加操作
       //1.获取要删除留言的id号
      
       $id = $_GET["id"];
     
       //获取留言信息，解析后输出表格中
       //2.从留言linyan.txt信息文件中获取信息
       $info = file_get_contents("liuyan.txt");
      
       //3.以@@@符号拆分留言信息为一条一条的
      
       $lylist = explode("@@@",$info);
       //4.使用unset删除指定id的留言
       unset($lylist[$id]);
       //5.还原留言信息为字串，并写回留言文件：liuyan.txt
       $ninfo = implode("@@@",$lylist);
       file_put_contents("liuyan.txt",$ninfo);
       echo "删除成功";
       ?>
   </center>
</body>
</html>