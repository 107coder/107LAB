<?php

    require("dbconfig.php");

    $link = @mysqli_connect(HOST,USER,PASSWORD) or die("数据库连接失败！");
    mysqli_select_db($link,"newsdb");
    mysqli_set_charset($link, "utf8");

    switch($_GET["action"]){
        case "add": 
            $news_title = $_POST["news_title"];
            $keywords = $_POST["keywords"];
            $author = $_POST["author"];
            $content = $_POST["content"];
            $puttime = time();

            // echo $news_title;die;
            $sql = "insert into news values(null,'{$news_title}','{$keywords}',
                    '{$author}','{$puttime}','{$content}')";
            mysqli_query($link,$sql);

            $id = mysqli_insert_id($link);
            if($id > 0) {
                echo "<h3>新闻添加成功！<h3>";
            }else{
                echo "<h3>新闻添加失败！<h3>";
            }
            echo $id;
            echo "<a href = 'index.php'>浏览新闻</a>";

            break;
        case "del": 
            //1. 获取要删除的id号
            $id=$_GET['id'];
				
        //2. 拼装删除sql语句，并执行删除操作
            $sql = "delete from news where id={$id}";
            mysqli_query($link,$sql);
        
        //3. 自动跳转到浏览新闻界面
            header("Location:index.php");
        break;
        case "update": 
            //1. 获取要修改的信息
				$news_title = $_POST["news_title"];
				$keywords = $_POST["keywords"];
				$author = $_POST["author"];
				$content = $_POST["content"];
				$id = $_POST['id'];
				
				//2. 过滤要修改的信息（省略）
				//3. 拼装修改sql语句，并执行修改操作
                $sql = "update news set news_title='{$news_title}',
                keywords='{$keywords}',author='{$author}',
                content='{$content}' where id={$id}";
				//echo $sql;
				mysqli_query($link,$sql);
			
				//4. 跳转回浏览界面
				header("Location:index.php");
        break;


    }
    //（4）、关闭数据连接
    mysqli_close($link);
?>
