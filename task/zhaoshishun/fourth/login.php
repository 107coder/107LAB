<?php
header("Content-Type: text/html;charset=utf-8");
	//建立连接
// 导入配置文件
	require("./data/config.inc.php");
	$conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
	if($conn){
		//数据库连接成功
		$select = mysqli_select_db($conn,DBNAME);		//选择数据库
		if($select){
			//数据库选择成功
			if(isset($_POST["subl"])){
				
				$user = $_POST["username"];
				$pass = $_POST["password"];
				if($user == ""||$pass == ""){
					//用户名or密码为空
					//弹窗提示信息并返回登陆页面
					echo"<script type="."\""."text/javascript"."\"".">"."window.alert"."("."\""."用户名或密码不能为空！"."\"".")".";"."</script>";
					echo"<script type="."\""."text/javascript"."\"".">"."window.location="."\""."./4/HTML/login.html"."\""."</script>";
					exit;
				}
				//sql语句
				$sql_select = "select username,password from user where username = '$user' and password = '$pass'";
				//设置编码
				mysqli_query($conn,'SET NAMES UTF8');
				//执行sql语句
				$ret = mysqli_query($conn,$sql_select);
				$row = mysqli_fetch_array($ret); 
				
				//用户密码正确
				if($user == $row['username']&&$pass == $row['password']){
					//跳转登陆成功页面
					session_start();
					$_SESSION['username']=$user;
					//检验验证吗
						 if(isset($_REQUEST['authcode'])){
						    //strtolower()小写函数
						    if(strtolower($_REQUEST['authcode'])!= $_SESSION['authcode']){
							    echo"<script>alert('验证码错误，请重新输入')</script>";
								echo"<script>window.location= './4/HTML/login.html';</script>";
						    }
						    else{
						    	header("Location:./4/HTML/home.html");
						    }
						    exit();
 				 } 
					 
				}else{
					//登陆失败
					echo"<script>alert('密码错误，请重新输入')</script>";
					echo"<script>window.location= './4/HTML/login.html';</script>";
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
