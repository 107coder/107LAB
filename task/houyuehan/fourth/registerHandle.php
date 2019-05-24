<?php
    header("content-type:text/html;charset=utf-8");//设置字符编码吧
    //通过php连接到mysql数据库
    $mysqli=new mysqli('localhost','root','','demodb');
    //开启session
    //session_start();
    
    //接收表单传递的用户名和密码
    $username=$_POST['username'];//$_POST[],获取前端表单传回来的数据，并且是通过input的name属性值来获取
    $password=$_POST['password'];//以下同上
    $age=$_POST['age'];
   
            
            
            //$sql = "SELECT username FROM user WHERE username='$username';";
            //$result = mysqli_query($conn,$sql1);
            //$mysqli_result=$mysqli->query($sql);
            //$rows = mysqli_num_rows($result); 
            //if($rows>0) {
            /*if($mysqli_result&&$mysqli_result->num_rows>0){
                echo "<script>alert('用户名已经有人注册了，重新注册一个吧')</script>";
                echo "<script>window.location='register.php';</script>";
            }
            else {*/
                echo "<script>
                    alert('注册成功');
                </script>";
                echo "用户名可用\n";
                //设置客户端和连接字符集
                //mysqli_query($conn,"set names utf8");
                $mysqli->set_charset('utf8');
                //通过php进行insert操作
                $sql="insert into user(username,password) values('{$username}','{$password}');";

                //返回用户信息字符集
                $mysqli_result=$mysqli->query($sql);
                
                if(! $mysqli_result )
                    {
                      die('Could not enter data: '. $mysqli->error());
                      echo "<script>
                                alert('请重新注册');                                
                            </script>";
                      echo "<script> window.location='register.php'; </script>";      
                      exit();
                    }
                    echo "恭喜你注册成功\n";
                echo "用户名：".$username;
                //释放连接资源
                $mysqli->close();
               // }                
                                 
?>
echo "<script> window.location='logIn.php'; </script>";