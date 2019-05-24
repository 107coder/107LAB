<?php
//这是一个信息增删改操作的处理页

//1.导入配置文件

//2.连接mysql，并选择数据库

header('content-type:text/html;charset-utf-8');
$mysqli=new mysqli('localhost','root','','demodb');
if($mysqli->connect_error){
    die('CONNECT ERROR:'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
//3.根据需要的action值，判断所属操作，执行相应的代码
$act=$_GET['act'];
$title=$_POST['title'];
$keywords=$_POST['keywords'];
$author=$_POST['author'];
$content=$_POST['content'];
$addtime=time();
$id=$_GET['id'];//del有用
switch($act){
    case 'add'://执行添加操作
    //(1)、获取要添加的信息，并补充其他信息
    $title = $_POST["title"];
    $keywords = $_POST["keywords"];
    $author = $_POST["author"];
    $content = $_POST["content"];
    $addtime = time();
    //（2)、信息过滤
    //（3）、拼装添加sql语句，并执行相应操作
    //$sql="select title from newsdb;";
    $sql="insert newsdb(id,title,keywords,author,content,addtime) 
    values(null,'{$title}','{$keywords}','{$author}','{$content}','{$addtime}');";
    $res=$mysqli->query($sql);
    //（4）、判断是否成功
    if($res){
        $insert_id=$mysqli->insert_id;
        echo "<script> 
            alert('添加成功'); 
            location.href='news-list.php';
            </script>";
            exit;
    }else{
        echo "<script> 
            alert('添加失败'); 
            location.href='news-add.php';
            </script>";
            exit;

    }

    break;

    case 'del':
        $sql="delete from newsdb where id=".$id;
        $res=$mysqli->query($sql);
        header("location:news-list.php");

    break;

    case 'update':
        //$id=$_POST['id'];
        //$sql="update newsdb set title='{$title}',keywords='{$keywords}',author='{$author}',content='{$content}' where id=".$id;
        $sql="update newsdb set title='{$title}',keywords='{$keywords}',author='{$author}',content='{$content}' where id={$id};";
        $res=$mysqli->query($sql);
        //echo $sql;
        /*if($id){
            echo "<script> 
            alert('成功');
            </script>";
            exit;
        }else{
            echo "<script> 
            alert('失败');
            
            </script>";
            exit;
        }*/
        //header("location:news-list.php");
        if($res){
            echo "<script> 
            alert('更新成功');
            location.href='news-list.php';
            </script>";
            exit;
        }else{
            echo "<script> 
            alert('更新失败'); 
            location.href='news-edit.php';
            </script>";
            exit;
        }
        
    break;
}
//4.
$mysqli->close();

