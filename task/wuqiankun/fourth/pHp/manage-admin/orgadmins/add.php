<html>
    <head>
        <title>添加用户</title>
    </head>
    <body>
        <div>
            <center>
                <div width="90%">
                    <div width="200px" margin="auto">
                        <h2>用户管理</h2>
                        <a href="admins.php">用户列表</a>
                    </div>
                    <hr width="90%"/>
                </div>
                <h3>添加用户</h3>
                <form action="action.php? action=add" method="post">
                    <table width="350px">
                        <tr>
                            <td align="right">用户名:</td>
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