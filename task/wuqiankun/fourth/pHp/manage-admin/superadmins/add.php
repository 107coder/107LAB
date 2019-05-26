<html>
    <head>
        <title>添加管理员</title>
    </head>
    <body>
        <div>
            <center>
                <div width="90%">
                    <div width="200px" margin="auto">
                        <h2>管理员管理</h2>
                        <a href="superadmins.php">管理员列表</a>
                    </div>
                    <hr width="90%"/>
                </div>
                <h3>添加管理员</h3>
                <form action="action.php? action=add" method="post">
                    <table width="350px">
                        <tr>
                            <td align="right">管理员名:</td>
                            <td><input type="text" name="username"></td>
                        </tr>
                        <tr>
                            <td align="right">密码:</td>
                            <td><input type="text" name="password"></td>
                        </tr>
                        <tr>
                            <td align="right">真实姓名:</td>
                            <td><input type="text" name="truename"></td>
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