<?php
//header("content-type:text/html;charset=utf-8");//设置字符编码吧

//开启session
//session_start();

//接收表单传递的用户名和密码
//$username=$_POST['username'];//$_POST[],获取前端表单传回来的数据，并且是通过input的name属性值来获取
//$password=$_POST['password'];//以下同上
        //通过php连接到mysql数据库
        //$mysqli=new mysqli('localhost','root','','demodb');
        //$sql = "SELECT * FROM user WHERE (username='$username') AND (password='$password');";
        //$sql="select * from user where username='$username' and password='$password';";
        //$mysqli_result = $mysqli->query($sql);
        //if($mysqli_result&& $mysqli_result->num_rows>0){
            //echo "<script>
               // alert('登录成功');
                //location.href='home.php';
                //</script>";
        //}
        /*else{
            echo "<script>
                alert('没有此用户，请注册后登录');
                location.href='register.php';
                </script>";
        }*/
            //$mysqli->set_charset('utf8');
            
            //返回用户信息字符集                
           // echo "用户名：".$username;
            //释放连接资源
            //$mysqli->close();
            header("content-type:text/html;charset=utf-8");//设置字符编码吧
            //通过php连接到mysql数据库
            $mysqli=new mysqli('localhost','root','','demodb');
            //返回用户信息字符集
            $mysqli->set_charset('utf8');
            //接收表单传递的用户名和密码
            $username=$_POST['username'];//$_POST[],获取前端表单传回来的数据，并且是通过input的name属性值来获取
            $password=$_POST['password'];//以下同上
            $_SESSION['curuser']=$username;        
                    //$sql = "SELECT * FROM user WHERE (username='$username') AND (password='$password');";
                    $sql="select * from user where username='$username' and password='$password';";
                    $mysqli_result = $mysqli->query($sql);
                    if($mysqli_result&& $mysqli_result->num_rows>0){
                        echo "<script>
                            alert('登录成功');
                            alert($_SESSION['curuser']);
                            location.href='home.php';
                            </script>";
                    }
                    else{
                        echo "<script>
                            alert('没有此用户，请注册后登录');
                            location.href='register.php';
                            </script>";
                    }
                    
                        
                                        
                        //echo "<div class='suer-mes' style='position: absolute;top: 110px; border: 1px solid red; right: 70px;'>
                        //用户名：<span class='cur_user'>$username</span></div>";
                        
                        //echo " ";
                        //释放连接资源
                        //$mysqli->close();
?>

    