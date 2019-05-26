<?php
require  'dbconfig.php';
//连接数据库
$link=mysqli_connect(HOST,USER,PASS) or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
if (!$link) {
    echo '连接失败 ';
  }
  mysqli_set_charset($link, "utf8");
mysqli_select_db($link,DBNAME) or die("指定数据库打开失败");
//获取用户输入值
switch($_GET["act"]){
    case 'addUser':
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sex=$_POST["sex"];
    if($_POST["sex"]==0)
    $sex="男";
    else if($_POST["sex"]==1)
    $sex="女";
    else if($_POST["sex"]==2)
    $sex="保密";
    //echo "$passworda";
    $sql = "insert into userload values('{$username}','{$password}','{$email}','{$sex}',null)";
    echo $sql;
    mysqli_query($link,$sql);
    //判断插入是否成功
    $id = mysqli_insert_id($link);//获取刚刚添加信息的自增id号值
    if($id>0){
        echo "<h3>注册成功</h3>";
    }else{
        echo "<h3>注册失败！</h3>";
    }
    echo $id;
    echo "<a href='doladd.php'>返回</a>&nbsp;&nbsp;";
    //echo "<a href='index.php'>浏览新闻</a>";
    
    break;
    //-------------
    case 'dolad':
    $userid=$_POST["userid"];
    $passworda=$_POST["passworda"];
    session_start(); 
    $_SESSION['id']=$userid;
    $sql= " select password from userload where userid={$userid}";
    $result=mysqli_query($link,$sql);
    
    $row=mysqli_fetch_array($result, MYSQLI_NUM);
    var_dump($row);
   // var_dump($sql);
    /*记得封装函数
   //var_dump($row); 
    //var_dump($result);
    //return $row;*/
   /* if($userid)
    {
        echo "<script language=\"JavaScript\">alert(\"账号错误或密码为空\");</script>";
        echo "<script>window.location.href='doladd.php';</script>";
    }*/
    if($row==NULL)
    {
        //header("Location:用户登录.php");
        echo "<script language=\"JavaScript\">alert(\"账号错误\");</script>";
        echo "<script>window.location.href='doladd.php';</script>";
        break;
    }
   if($row[0]==$passworda){
 echo "<script language=\"JavaScript\">alert(\"欢迎您\");</script>";
        header("Location:index.php");
        //<script>window.location.href='edit.php';</script>
    }
    if($row[0]!=$passworda){
        echo "<script language=\"JavaScript\">alert(\"密码错误\");</script>";
        echo "<script>window.location.href='doladd.php';</script>";
    }
    
    
    break;
    case 'superdolad':
    $superuserid=$_POST["superuserid"];
    $superpassword=$_POST["superpassworda"];
    session_start();
    $_SESSION['UserName']=$superuserid;
    $_SESSION['password']=$superpassword;
    $sqll= " select password from super where userid={$superuserid}";
    $resultt=mysqli_query($link,$sqll);
    $row1=mysqli_fetch_array($resultt, MYSQLI_NUM);
    //var_dump($row1);
    if($row1==NULL)
    {
        //header("Location:用户登录.php");
        echo "<script language=\"JavaScript\">alert(\"账号错误\");</script>";
        echo "<script>window.location.href='superdoladd.php';</script>";
        break;
    }
    if($row1[0]==$superpassword){
        
        echo "<script language=\"JavaScript\">alert(\"欢迎您\");</script>";
        header("Location:super.php");
        //<script>window.location.href='edit.php';</script>
    }
    if($row1[0]!=$superpassworda){
        echo "<script language=\"JavaScript\">alert(\"密码错误\");</script>";
        echo "<script>window.location.href='superdoladd.php';</script>";
    }
    
    
    break;
    case 'exsit':
    //6.释放session
    session_start();
    session_unset();
    session_destroy();
    echo "<script>window.location.href='doladd.php';</script>";
}
//（4）、关闭数据连接
mysqli_close($link);

