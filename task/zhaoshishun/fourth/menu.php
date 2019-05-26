<style>
.header{
	width:100%;
	height:35px;
	background-color:rgb(57,164,219);
}
.user{
	position: absolute;
	right: 180px;
	top:7px;
	font-size: 19px;
	color: #fff;
}
.user a{
	color: #fff;
	text-decoration: none;
}
.user a:hover{
	color:red;
}
.white{
	color:#fff!important;
}


</style>

<?php session_start(); ?>
<div class="header">
	<div class="user">
		<a href="./home.html" class="white">首页&nbsp&nbsp&nbsp</a>
					<?php 
					
					if(isset($_SESSION['username']))
					{
						echo '欢迎您,'?><a href='./updateUser.html?username=<?php echo $_SESSION['username'];?>'><?php echo $_SESSION['username']; ?></a>
						<?php
						echo '|&nbsp';
						echo '<a href="#" onclick="cancal()">注销</a>';
					}

					else{
						echo '<a href="./login.html ">登录 </a>';
						echo '| ';
						echo '<a href="./reg.html" >注册</a>';
						}
					?>
	</div>
</div>
<script type="text/javascript">
	function cancal(){
			if(window.confirm("您确定要注销吗？")){
				window.location="../../cancal.php"
			}
	}
</script>