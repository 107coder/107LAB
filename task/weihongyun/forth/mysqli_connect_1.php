<?php
//1.
//$mysqli =new mysqli('localhost','root','');
//print_r($mysqli);
//2.
//$mysqli->select_db('dbname');
//$mysqli=new mysqli();
//$mysqli->connect('localhost','root','');
//print_r($mysqli);
//3.
$mysqli =@new mysqli('localhost','root','','test');//@后抑制符
print_r($mysqli);