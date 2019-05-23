<?php  
session_start();
setcookie('adminname','$_COOKIE["adminname"]',time()-1);
?>
<?php  
Header("Location:./adminLogin.php");
?>

		


