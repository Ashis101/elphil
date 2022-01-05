<?php 
session_start();
if($_SESSION['user'] && pathinfo($_SERVER['PHP_SELF'],PATHINFO_BASENAME) === 'login.php'){
    return header('Location:/elphil/view/index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include_once('./layout/nav.php')?>
    
    <div class="container">
        <form action="../controller/user.php" method="post">
            <label for="">Username</label>
            <input type="text" name="name">
            <label for="">Password</label>
            <input type="password" name="password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>