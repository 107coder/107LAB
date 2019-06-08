<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户添加</title>
</head>
<body>
       <h2>添加用户</h2> 
        <form action="doAction.php?act=addUser" method="post">
            <table border='1' cellpadding='0' cellspacing='0' width='80%' align="center">
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="username" id="" placeholder='请输入合法用户名' required='required'/></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="password" id="" placeholder='请输入密码' required='required'/></td>
                </tr>
                <tr>
                    <td>年龄</td>
                    <td><input type="number" name="age" id="" min='1' max='125' placeholder='请输入合法年龄' required='required'/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="添加用户"/></td>
                </tr>
            </table>
        </form>

</body>
</html>