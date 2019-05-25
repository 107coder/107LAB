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
       <a href="index1.php">添加留言</a>
       <a href="show1.php">查看留言</a>
       <a href="实现用户列表.php">点击进入超级管理员页面</a>
       <a href="edituser.php">点击修改自身信息</a>
       <a href="index4.php">浏览新闻</a> |
       <a href="add.php">发布新闻</a>
       <a href="guanliyuan.html">退出登录</a>
       <hr width="90%"/>
       <h3> 添加留言</h3>
       <form action="doAdd.php" method="post">
          <table width="420" border="0" cellpadding="4">
            <tr>
               <td align="right">标题：</td>
               <td><input type="text" name="title"/></td> 
            </tr>
            <tr>
               <td align="right">留言者：</td>
               <td><input type="text" name="author"/></td> 
            </tr>
            <tr>
               <td align="right" valign="top">留言内容</td>
               <td><textarea name="content" rows="5" cols="30"></textarea></td> 
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="提交"/>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="重置"/>
                </td>
            </tr>
          </table>   
       <form>
   </center>
</body>
</html>