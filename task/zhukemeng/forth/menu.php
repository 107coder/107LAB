<?php
header("content-type:text/html;charset=utf-8");
    print <<<EOT
	<h2>新闻管理系统</h2>
	<a href="index.php">浏览新闻</a> |
	<a href="release.php">发布新闻</a> |
	<a href="super-login.php">管理用户</a>
	<hr width="90%"/>
	EOT;
?>