
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>后台主页</title>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
<script src="./js/home.js"></script>
<link rel="stylesheet" href="./css/userAndAdmin.css">
<link rel="stylesheet" href="./css/news.css">
<link rel="stylesheet" href="./css/introduce.css">
</head>
<?php session_start(); ?>
<?php require_once './ifLogin.php'; ?>
<body>

   <?php require_once './menu.php'; ?>
<div class="main">

  

          <!--操作用户-->
          <div class="doUser"> 
              <?php include './doUser.php'; ?>
          </div>
      
          <!--操作管理员-->
          <div class="doAdmin">
              <?php include './doAdmin.php'; ?>
          </div>

          <!--操作新闻-->
          <div class="doNews">
              <?php include '../news/doNews.php'; ?>  
          </div>

          <!--操作中心简介-->
          <div class="doIntroduce">
              <?php include '../introduce/doIntroduce.php'; ?>  
          </div>
    
           <?php include './add.php'; ?> 
 


</div>











</body>
</html>
<style>
.main{
  width:100%;
  
  //background-color: #3399CC;
 
  }

a{
  color:#ECF0F1;
  text-decoration: none;

}
a:hover{
  color:red;
}


</style>
<script type="text/javascript">
  function cancal(){
            if(window.confirm("您确定要注销吗？")){
                window.location="./adminCancal.php";
            }
    }
  function delUser(id){
        if(confirm("确定要删除吗")){
             window.location="./userAction.php? action=del&id="+id;
        }
       
    }
  function delAdmin(id){
        if(confirm("确定要删除吗")){
             window.location="./adminAction.php? action=del&id="+id;
        }
       
   }
   function delNews(news_id){
        if(confirm("确定要删除吗?")){
             window.location="../news/newsAction.php? action=del&news_id="+news_id;
        }
       
    }
    function ifTop(news_id){
        if(confirm("确定要置顶吗?")){
             window.location="../news/ifToTop.php? action=yes&news_id="+news_id;
        }
    }
    function removeTop(news_id){
        if(confirm("确定要取消置顶吗?")){
             window.location="../news/ifToTop.php? action=no&news_id="+news_id;
        }
    }
    function delWorkRange(id){
        if(confirm("确定要删除吗")){
             window.location="../introduce/introduceAction.php? action=del&id="+id;
        }
       
   }

</script>