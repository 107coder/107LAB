<html>
    <head>
        <title>中心简介</title>
    </head>
    <body>
        <div>
            <center>
                <div width="90%">
                    <div width="200px" margin="auto">
                        <h2>中心简介</h2>
                        <a href="add.php">添加内容</a>
                    </div>
                    <hr width="90%"/>
                </div>  
                <h3>添加内容</h3>
                <form action="action.php? action=add" method="post">
                    <table width="350px">
                        <tr>
                            <td align="right">标题:</td>
                            <td><input type="text" name="title"></td>
                        </tr>
                        
                        <tr>
                            <td align="right" valign="top">内容:</td>
                            <td><textarea cols="30" rows="5" name="content"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="添加"> &nbsp;&nbsp;&nbsp;
                                <input type="reset" value="重置">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </body>
</html>