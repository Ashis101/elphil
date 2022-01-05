<?php

session_start();


if(!isset($_SESSION['user'] )){
    return header('Location:/elphil/view/login.php');
    
}elseif($_SESSION['user']['isadmin'] == 0 and pathinfo($_SERVER['PHP_SELF'],PATHINFO_BASENAME) === 'upload.php'){
    return header('Location:/elphil/view/index.php');
}
?>