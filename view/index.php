<?php
include_once('../session/isexists.php');

list($allproduct)=include_once('../controller/product.php');
// var_dump($allproduct);

// foreach($allproduct as $product){
//     var_dump($product['name']);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <?php include_once('./layout/nav.php')?>
    <?php foreach($allproduct as $product):?>
        <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><?php echo $product['name']?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $product['model']?></h6>
        <p class="card-text"><?php echo $product['desciption']?></p>
        <form action="../controller/cart.php" method="post">
            <input type="hidden" name="productid" value=<?php echo $product['id']?>>
            <button type="submit">AddToCart</button>
        </form>
    </div>
    </div>
    <?php endforeach;?>
    
    
</body>
</html>