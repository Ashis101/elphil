<?php

session_start();
session_destroy();

header('Location:/elphil/view/login.php');

die();
?>