<?php
include_once('../db/connection.php');

$name=$_POST['name'];
$password=$_POST['password'];

$query='select * from users where name=:name';
$statement=$pdo->prepare($query);
$statement->bindParam(':name',$name);
$statement->execute();

$data=$statement->fetch(PDO::FETCH_ASSOC);
// echo $data;
if( $data){
    if($data['password'] == $password){
        session_start();
        $_SESSION['user']=$data;
        return header('Location:/elphil/view/index.php');
    }else{
        return header('Location:/elphil/view/login.php');   
    }

}else{
    // $_SESSION['login_error']='User Not Exists';
    return header('Location:/elphil/view/login.php');   
}


?>