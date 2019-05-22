<style>
.header{
  width:100%;
  height:40px;
  background-color:rgb(57,164,219);
}


.adminLogin{

  width:300px;
  height:35px;
  line-height: 40px;
  font-size: 19px;
  color: #fff;
  float:right;
}

</style>

<div class="header">
       
       <div class="adminLogin">
          <a href="../admin/home.php">首页</a>
                <?php                
                if(isset($_SESSION['adminname']))
                {
                  echo '欢迎您,'.$_SESSION['adminname'];
                  echo '  |  ';
                  echo '<a href="#" onclick="cancal()"> 注销</a>';
                }
                else{
                  echo '  |  ';
                  echo '<a href="./adminLogin.php">登录 </a>';
                  }?>
       </div>
   </div>