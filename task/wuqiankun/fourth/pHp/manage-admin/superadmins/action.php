<?php

    define("HOST","localhost");
    define("USER","root");
    define("PASSWORD","");
    define("DBNAME","admin");

    $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
    mysqli_select_db($link,"admin");
    mysqli_set_charset($link, "utf8");

    switch($_GET["action"]){
        case "add": 
            $username = $_POST["username"];
            $password = $_POST["password"];
            $truename = $_POST["truename"];
            $create_time = time();

            $sql = "insert into superadmins values(null,'{$username}','{$password}',
            '{$truename}','{$create_time}')";
            mysqli_query($link,$sql);
            var_dump(mysqli_query($link,$sql));
            $id = mysqli_insert_id($link);
            if($id > 0) {
                echo "<h3>管理员添加成功！<h3>";
            }else{
                echo "<h3>管理员添加失败！<h3>";
            }
            echo $id;
            echo "<a href = 'superadmins.php'>管理员列表</a>";

            break;
        case "del": 
            //1. 获取要删除的id号
            $id=$_GET['id'];
				
        //2. 拼装删除sql语句，并执行删除操作
            $sql = "delete from superadmins where id={$id}";
            mysqli_query($link,$sql);
        
        //3. 自动跳转到浏览新闻界面
            header("Location:superadmins.php");
        break;
        case "update": 
            //1. 获取要修改的信息
                $username = $_POST["username"];
                $password = $_POST["password"];
                $truename = $_POST["truename"];
				$id = $_POST['id'];
				
				//2. 过滤要修改的信息（省略）
				//3. 拼装修改sql语句，并执行修改操作
                $sql = "update superadmins set username='{$username}',
                password='{$password}',truename='{$truename}',
                where id={$id}";
				//echo $sql;
				mysqli_query($link,$sql);
			
				//4. 跳转回浏览界面
				header("Location:superadmins.php");
        break;


    }
    //（4）、关闭数据连接
    mysqli_close($link);
?>
