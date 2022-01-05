<?php

try{
    $pdo=new PDO('mysql:host=localhost;port=3306;dbname=elphil','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if($pdo){
        return $pdo;
    }
}catch(PDOException $e) {
	echo $e->getMessage();
}

?>