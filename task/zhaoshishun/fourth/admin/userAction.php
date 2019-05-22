<?php
     header("Content-Type: text/html;charset=utf-8");
    //建立连接
     require("../data/config.inc.php");
    $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
    $select = mysqli_select_db($conn,DBNAME);       //选择数据库
    $_action=$_GET["action"];
	if($_action=='add')		//添加
	    {
	    	$user = $_POST["username"];
			$pass = $_POST["password"];
			$re_pass = $_POST["re_password"];

				if($user == ""||$pass == ""){
					//用户名or密码为空
					echo"<script>window.alert('用户名或密码不能为空！')</script>";
					echo"<script>window.location='./home.php'</script>";
					exit;
				}
				if($pass == $re_pass){
						//两次密码输入一致
						mysqli_set_charset($conn,'utf8');	//设置编码	
						//sql语句
						$sql_select = "select username from user where username = '$user'";
						//sql语句执行
						$result = mysqli_query($conn,$sql_select);
						//判断用户名是否已存在
						$num = mysqli_num_rows($result); 
					
							if($num){
							//用户名已存在
								echo"<script>window.alert('用户名已存在')</script>";
								echo"<script>window.location='./home.php'</script>";
							exit;
								}else{
									//用户名不存在
									$sql_insert = "insert into user(username,password) values('$user','$pass')";
									//插入数据
									$ret = mysqli_query($conn,$sql_insert);
									$row = mysqli_fetch_array($ret); 
									//跳转注册成功页面
									echo"<script>window.alert('添加成功！')</script>";
									echo"<script>window.location='./home.php'</script>";
									exit;
							}
				}
		else{
						//两次密码输入不一致
						echo"<script>window.alert('两次密码输入不一致！')</script>";
						echo"<script>window.location='./home.php'</script>";
						exit;
			}

	    } 
   
   
    if($_action=='del')		//删除
    {
    		$sql="delete from user where id={$_GET['id']}";
    		mysqli_query($conn,$sql);
    		header("Location:./home.php");

    }
    if($_action=='update')
    {
    	$id=$_GET['id'];
    	$user = $_POST["username"];
		$pass = $_POST["password"];
			
			$sql = "update user set username='$user',password='$pass' where id=$id";
			$ret = mysqli_query($conn,$sql);
			header("Location:./home.php");	
	}
	mysqli_close($conn);
		
 	?>

   