<?php
header('Content-Type: text/html;charset=UTF-8');
?>
<?php
$mysqli = new mysqli('localhost','root','root','denglu');


if(!isset($_POST["submit"])){
    exit("错误执行");
}//检测是否有submit操作 

include('guanliyuan1.php');//链接数据库
$name = $_POST['name'];//post获得用户名表单值
$passowrd = $_POST['password'];//post获得用户密码单值

if ($name && $passowrd){//如果用户名和密码都不为空
         $sql = "select * from users where username = '$name' and password='$passowrd'";//检测数据库是否有对应的username和password的sql
         $mysqli_result = mysqli_query($son,$sql);//执行sql
         $rows=mysqli_num_rows($mysqli_result);//返回一个数值
         if($rows){//0 false 1 trues
                echo "登录成功 <br />";//成功输出注册成功
                echo "你的用户名是".($name)."<br />";
               
               header("refresh:3;url=index1.php");//如果成功跳转至index.php页面
               exit;
         }else{
            echo "用户名或密码错误";
            echo "
                <script>
                        setTimeout(function(){window.location.href='guanliyuan.html';},1000);
                </script>

            ";//如果错误使用js 1秒后跳转到登录页面重试;
         }
         

}else{//如果用户名或密码有空
            echo "表单填写不完整";
            echo "
                  <script>
                        setTimeout(function(){window.location.href='guanliyuan.html';},1000);
                  </script>";

                    //如果错误使用js 1秒后跳转到登录页面重试;
}

mysqli_close($son);//关闭数据库
?>


?>