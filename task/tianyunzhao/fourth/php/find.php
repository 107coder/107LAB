<?php
header('Content-Type: text/html;charset=UTF-8');
?>
<?php
$url = "6.php"
$file = file_get_contents($url);
print_r($file);
$q = $_post['question'];
$a = $_post['answer'];
$con = new  mysqli_connect('localhost','root','root','find');
if(!$con){
    echo 'could not connect:'.mysqli_error();

}
mysqli_select_db("joe",$con);
mysqli_query("insert into messare values('$q','$a','无')");
mysqli_close($con);
echo "输入成功";
?>