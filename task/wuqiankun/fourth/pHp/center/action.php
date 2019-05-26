<?php

    require("../dbconfig.php");

    $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
    mysqli_select_db($link,"newsdb");
    mysqli_set_charset($link, "utf8");

    switch($_GET["action"]){
        case "add": 
            $title = $_POST["title"];
            $content = $_POST["content"];
        
            // echo $news_title;die;
            $sql = "insert into center_con values(null,'{$title}','{$content}')";
            mysqli_query($link,$sql);

            $id = mysqli_insert_id($link);
            if($id > 0) {
                echo "<h3>中心简介添加成功！<h3>";
            }else{
                echo "<h3>中心简介添加失败！<h3>";
            }
            echo $id;
            echo "<a href = 'center.php'>中心简介</a>";
 
            break;
        case "update": 
            //1. 获取要修改的信息
				$title = $_POST["title"];
				$content = $_POST["content"];
				$id = $_POST['id'];
				
				//2. 过滤要修改的信息（省略）
				//3. 拼装修改sql语句，并执行修改操作
                $sql = "update center_con set title='{$title}',
                content='{$content}' where id={$id}";
				//echo $sql;
				mysqli_query($link,$sql);
			
				//4. 跳转回浏览界面
				header("Location:center.php");
        break;


    }
    //（4）、关闭数据连接
    mysqli_close($link);
?>
