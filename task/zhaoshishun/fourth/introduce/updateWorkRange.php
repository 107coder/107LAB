<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改工作范围</title>
<link rel="stylesheet" href="../admin/css/update.css">
<?php session_start(); ?> 
</head>
<body>
    <?php require_once './menu.php'; ?>
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
                                $sql="select * from workRange where id={$_GET['id']}"; 
                               mysqli_query($conn,'SET NAMES UTF8');
                                 $result= mysqli_query($conn,$sql);
                                 
                                    $introduce=mysqli_fetch_assoc($result);
                             
                             ?>
            <div class="updateForm">
                <form action = "./introduceAction.php?action=update&id=<?php echo $introduce['id'];?>" method = "post">
                      <div class="id">id:&nbsp&nbsp&nbsp<?php echo $_GET['id']?></div>
                      <div class="input1">工作范围:<br><input type="text" name="workRange" value=' <?php echo $introduce["workRange"];?>'></div> 
                      
                      <div class="sub"><input type="submit" value="确认修改" name="subr"></div>
               </form>
          </div>
                            
</div>                                    
                
</body>
<style>
.input1 {
  margin-top: 40px;
}
.sub{
  margin-top: 40px;
}
</style>

</html>