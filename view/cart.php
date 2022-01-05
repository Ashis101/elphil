<?php 
include_once('../session/isexists.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cart</title>
</head>
<body>
    <?php include_once('./layout/nav.php')?>
    
    <?php foreach($_SESSION['cart'] as $product):?>
        <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><?php echo $product['name']?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $product['price']?></h6>
        <p class="card-text"><?php echo $product['quantity']?></p>
    </div>
    </div>
    <?php endforeach;?>
</body>
</html>