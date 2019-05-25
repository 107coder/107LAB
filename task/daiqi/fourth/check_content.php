<?php
if(mb_strlen($_POST['info'])>600){
    skip('mainews_add.php', '简介不得多于600个字！');
}
?>