<?php
	header("Content-Type:text/html;charset=utf-8");

    //链接数据库
    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DBNAME","admin");
    
    session_start();
  //获取用户输入的验证码
    $t = 1;
    $t1 = 1;
    $code = trim($_POST["captcha"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    function checkEmpty($username,$password,$code){
        if($username==null || $password==null){
          echo '<html><head><Script Language="JavaScript">alert("用户名或密码为空");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login.php\">";
        }
        else{
          if($code==null){
            echo '<html><head><Script Language="JavaScript">alert("验证码为空");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login.php\">";
          }
          else{
            return true;
          }
        }
    }
    function checkcode($code){
        if(strtolower($code)==strtolower($_SESSION['captcha_code'])){
          return true;
        }
        else{
          echo '<html><head><Script Language="JavaScript">alert("验证码错误");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login.php\">";
        }
      }
	//将字符串都转成小写进行比较
        //根据用户名查询用户
        $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
        mysqli_select_db($link,"admin");
        mysqli_set_charset($link, "utf8");
        $sql = "select* from admins where username = '{$username}' and password = '{$password}';";
        $result = mysqli_query($link, $sql);
        if($result && mysqli_num_rows($result)>0){
            $t = 1;
            $t1 = 0;
            $admins = mysqli_fetch_assoc($result);
        }else{
            $t = 0;
            $t1 = 1;
        }
    if($t){
      function checkUser($username,$password){
        $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
        mysqli_select_db($link,"admin");
        mysqli_set_charset($link, "utf8");
        $sql = "select* from admins where username = '{$username}' and password = '{$password}';";
        $result = mysqli_query($link, $sql);
        if($result && mysqli_num_rows($result)>0){
            $t = 1;
            $t1 = 0;
            $admins = mysqli_fetch_assoc($result);
        }else{
            $t = 0;
            $t1 = 1;
        }
        if(($username==$admins['username'])&&($password==$admins['password']))
        {
        //登录成功将信息保存到session中
        /*$_SESSION['username']=$username;
              echo '你好:'.$username.'登陆成功!';
              header('refresh:3;url=../../../../manage/index_.php');*/
              return true;
        }
        else{
            echo '<html><head><Script Language="JavaScript">alert("用户不存在");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login.php\">";
        }
        mysqli_close($link);
      }

      if(checkEmpty($username,$password,$code)){
        if(checkcode($code)){
          if(checkUser($username,$password)){
            $_SESSION['username']=$username; //保存此时登录成功的用户名
            header('refresh:1;url=../../../../107-3.html');      //全部验证都通过之后跳转到首页
          }
        }
      }
    }
if($t1){
  function checkUser1($username,$password){
    $link1 = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
    mysqli_select_db($link1,"admin");
    mysqli_set_charset($link1, "utf8");
    $sql1 = "select* from superadmins where username = '{$username}' and password = '{$password}';";
    $result1 = mysqli_query($link1, $sql1);
    if($result1 && mysqli_num_rows($result1)>0){
            $t = 0;
            $t1 = 1;
        $superadmins = mysqli_fetch_assoc($result1);
    }else{
      $t = 1;
      $t1 = 0;
    }

    if(($username==$superadmins['username'])&&($password==$superadmins['password']))
    {
    //登录成功将信息保存到session中
    /*$_SESSION['username']=$username;
          echo '你好:'.$username.'登陆成功!';
          header('refresh:3;url=../../../../manage/index_.php');*/
          return true;
    }
    else{
        echo '<html><head><Script Language="JavaScript">alert("管理员不存在");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login.php\">";
    }
  mysqli_close($link1);
  }
  if(checkEmpty($username,$password,$code)){
    if(checkcode($code)){
      if(checkUser1($username,$password)){
        $_SESSION['username']=$username; //保存此时登录成功的管理员名
        header('refresh:1;url=../../../../manage/index_.php');      //全部验证都通过之后跳转到首页
      }
    }
  }
}

    
	
?>
