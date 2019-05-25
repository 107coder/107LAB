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
       <h3> 查看留言</h3>
       <table border="1" width="700px">
           <tr>
               <th>留言标题</th>
               <th>留言人</th>
               <th>留言内容</th>
               <th>ip地址</th>
               <th>留言时间</th>
               <th>操作</th>
            
           </tr>
           <?php
         
           error_reporting( E_ALL&~E_NOTICE );
           //获取留言信息，解析后输出表格中
           //1.从留言linyan.txt信息文件中获取信息
           $info = file_get_contents("liuyan.txt");
           //2.去除留言内容最后的三个@@@符号
           $info = rtrim($info,"@");
           //3.以@@@符号拆分留言信息为一条一条的
           //（将留言信息以@@@的符号拆分成留言数组）
           $lylist = explode("@@@",$info);
           //4.便利留言信息数组，对每条留言做再次解析
           foreach($lylist as $k=>$v){
               $ly= explode('##',$v);
               echo "<tr>";
               echo "<td>{$ly[0]}</td>";
               echo "<td>{$ly[1]}</td>";
               echo "<td>{$ly[2]}</td>";
               echo "<td>{$ly[3]}</td>";
               echo "<td>".date("Y-m-d h:i:s",$ly[4])."</td>";
               echo "<td><a href='del.php?id={$k}'>删除</a></td>";
               echo "</tr>";
              // echo $v."<br />";
           }
           ?>
       </table>
   </center>
</body>
</html>