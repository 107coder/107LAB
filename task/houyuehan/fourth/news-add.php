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
    <title>添加新闻</title>
</head>
<body>
    <?php include "header.php"; ?>
        <center>
            <?php include("news-menu.php"); //导入导航栏 ?>
            <h3>发布新闻</h3>
            <form action="news-action.php?act=add" method="post">
                <table width="340px" border="1px">
                    <tr>
                        <td align="right" width="100px">标题:</td>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td align="right" width="100px">关键字:</td>
                        <td><input type="text" name="keywords"></td>
                    </tr>
                    <tr>
                        <td align="right">作者:</td>
                        <td><input type="text" name="author"></td>
                    </tr>
                    <tr>
                        <td align="right" valign="top">内容:</td>
                        <td><textarea cols="35" rows="5" name="content"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="添加">&nbsp;&nbsp;
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
        <?php include "footer.php"; ?>
</body>
</html>
<?php
$mysqli=new mysqli('localhost','root','','demodb');
if($mysqli->connect_error){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
?>