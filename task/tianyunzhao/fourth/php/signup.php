
<?php 
    header("Content-Type: text/html; charset=utf-8");

    if(!isset($_POST['submit'])){
        exit("错误执行");
    }//判断是否有submit操作
    
    $name=$_POST['name'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password
    $id=isset($_POST['id']);
    include('connect.php');//链接数据库
    $res="insert into user3(username,password) values ('$name','$password')";//向数据库插入表单传来的值的sql
	
    $result=mysqli_query($con,$res);//执行sql
    
    if (!$result){
        die('Error: ' . mysqli_error($con));//如果sql执行失败输出错误
    }else{
        echo "注册成功 <br />";//成功输出注册成功
	    echo "你的用户名是".($name)."<br />";
        echo "你的密码是".($password);
        header("refresh:3;url=login.html");//如果成功跳转至index.php页面
    }

    

    mysqli_close($con);//关闭数据库

?>


