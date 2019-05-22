<?php 

	if(isset($_COOKIE['adminname'])){
		$_SESSION['adminname']=$_COOKIE['adminname'];
	}
	
	
     if(isset($_SESSION['adminname'])){ 
     		 
     }else{ 
     		echo"<script>alert('请先登录')</script>";
			echo"<script>window.location= './adminLogin.php';</script>"; 
     } 

?> 