<?php
header("Content-Type: text/html; charset=UTF-8");

?>

<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<title>document</title>
</head>
<body>
<h2>添加界面</h2>
  <form action="doaction.php?act=adduser" method='POST'>
      <table border='1' cellpadding='0' cellspacing='0' bgcolor='#ABCDEF' width='80%'>
	       <tr>
		      <td>用户名</td>
			  <td><input type="text" name="username" id="" placeholder='' required='required'/></td>
		   </tr>
		    <tr>
		      <td>密码</td>
			  <td><input type="password" name="password" id="" placeholder='' required='required'/></td>
		   </tr>
		    
		    <tr>
		      <td colspan='2' ><input type="submit" value="添加"/></td>

		   </tr>
	  </table>
</body>
</html>
