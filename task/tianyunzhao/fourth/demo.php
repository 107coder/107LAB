<?php 
    $mysqli = new mysqli('localhost','root','root','denglu') or die("fail");

    $sql = "select * from user3";

    $mysqli_result = $mysqli->query($sql);

    $rows = $mysqli_result->fetch_all();

    
        
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="demo">
        <ul>
        <?php foreach($rows as $v){ ?>
            <li><?php echo $v[0]."".$v[1]." ".$v[2];?></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>

<style>

    .demo{
        width: 600px;
        height:400px;
        border: 2px solid red;
    }

    .demo li{
        line-height: 
    }
</style>

