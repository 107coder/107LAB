<?php
	 header("Content-Type: text/html;charset=utf-8");
    //建立连接
    require("./data/config.inc.php");
    $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
    $select = mysqli_select_db($conn,DBNAME);       //选择数据库

		$id=$_GET['id'];
    	$user = $_POST["username"];
		$pass = $_POST["password"];
		$re_pass=$_POST["pre_password"];
			$sql1="select password from user where id =$id";
			$result= mysqli_query($conn,$sql1);
            $password=mysqli_fetch_assoc($result);
            
            if($re_pass!=$password['password'])
            {
            	echo '<script>alert("密码错误，请重新输入")</script>';
            	echo"<script>window.location= './4/HTML/updateUser.html';</script>";
            }
            else{
            	$sql = "update user set username='$user',password='$pass' where id=$id";
				$ret = mysqli_query($conn,$sql);
				session_start();
				unset($_SESSION['username']);
				echo '<script>alert("修改成功，请重新登录")</script>';
				echo"<script>window.location= './4/HTML/login.html';</script>";
            }
			
			


?>