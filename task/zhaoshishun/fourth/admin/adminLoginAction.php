<?php
header("Content-Type: text/html;charset=utf-8");
	//建立连接
	require("../data/config.inc.php");
    $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
    
	if($conn){
		//数据库连接成功
		$select = mysqli_select_db($conn,DBNAME);       //选择数据库
		if($select){
			//数据库选择成功
			if(isset($_POST["subl"])){
				
				$user = $_POST["adminname"];
				$pass = $_POST["password"];
				if($user == ""||$pass == ""){
					//用户名or密码为空
					//弹窗提示信息并返回登陆页面
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."用户名或密码不能为空！"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."http://localhost:88/4/HTML/login.html"."\""."</script>";
					exit;
				}


				//管理员登录

				//sql语句
				$sql_select = "select adminname,password from admin where adminname = '$user' and password = '$pass'";
				//设置编码
				mysqli_query($conn,'SET NAMES UTF8');
				//执行sql语句
				$ret = mysqli_query($conn,$sql_select);
				$row = mysqli_fetch_array($ret); 
				
				//用户密码正确
				if($user == $row['adminname']&&$pass == $row['password']){
					if(!empty($_POST['remember'])){
						session_start();
						setcookie('adminname',$user,time()+3600*24*7);
						setcookie('password',$pass,time()+3600*24*7);
						
						header("Location:./home.php");
					}else{
						//跳转登陆成功页面
						session_start();
						$_SESSION['adminname']=$user;
						
						header("Location:./home.php");
					}
					
				}else{
					//登陆失败
					echo"<script>alert('密码错误，请重新输入')</script>";
					echo"<script>window.location= './adminLogin.php';</script>";
					exit;

				}  



			}
		}

		
		
		//关闭数据库
		mysqli_close($conn);
	}else{		
		//连接错误处理
		die('Could not connect:'.mysql_error());
	}	

 
?>
