<style>
.header{
  width:100%;
  height:40px;
  background-color:rgb(57,164,219);
}

.user,.admin,.news,.introduce{
  height:40px;
  line-height: 40px;
  margin-left: 50px;
  font-size: 20px;
  float:left;

}
.user{
  margin-left: 200px;
}
.adminLogin{

  width:300px;
  height:35px;
  line-height: 40px;
  font-size: 19px;
  color: #fff;
  float:right;
}
.white{
  color:#fff!important;
}

</style>

<div class="header">
       <div class="user"><a href="#" class="white">用户管理</a></div>
       <div class="admin"><a href="#" class="white">管理员管理</a></div>
       <div class="news"><a href="#" class="white">新闻管理</a></div>
       <div class="introduce"><a href="#" class="white">中心简介管理</a></div>
       <div class="adminLogin">
          <a href="./home.php" class="white">首页</a>
                <?php  
                
              
                  if(isset($_SESSION['adminname'])){ 
   
                  echo '欢迎您,'?><?php echo $_SESSION['adminname'];?><?php
                  echo '  |  ';
                  echo '<a href="#" onclick="cancal()" class="white"> 注销</a>';
                }
                else{
                  echo '  |  ';
                  echo '<a href="./adminLogin.php">登录 </a>';
                  }?>
       </div>
   </div>