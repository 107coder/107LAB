<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改用户信息</title>
<link rel="stylesheet" href="./css/update.css">
<?php session_start(); ?> 
</head>
<body>
    <?php require_once './menu2.php'; ?>
<div class="update">
    <img class="back" src="../4/images/henu4.jpg"><img>
                    <!--表格-->
                 
                       
                            <?php
                                header("Content-Type: text/html;charset=utf-8");
                                //建立连接
                               require("../data/config.inc.php");
                                $conn = @mysqli_connect(HOST,USER,PASS) or die("数据库连接失败！");
                                $select = mysqli_select_db($conn,DBNAME);       //选择数据库


                                //执行查询   
                                $sql="select * from user where id={$_GET['id']}"; 
                               
                                 $result= mysqli_query($conn,$sql);
                                 
                                    $user=mysqli_fetch_assoc($result);
                             
                             ?>
            <div class="updateForm">
                <form action = "./userAction.php?action=update&id=<?php echo $user['id'];?>" method = "post">
                      <div class="id">id:&nbsp&nbsp&nbsp<?php echo $_GET['id']?></div>
                      <div class="input1">用户名:<br><input type="text" name="username" value=' <?php echo $user["username"];?>'></div> 
                      <div class="input2">密码:<br><input type="text" name="password" value=' <?php echo $user["password"];?>'></div>
                      <div class="sub"><input type="submit" value="确认修改" name="subr"></div>
               </form>
          </div>
                            
</div>                                    
                
</body>
<style>


</style>

</html>