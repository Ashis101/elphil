<?php

require_once('../model/product.php');

$product=new Product('mysql:host=localhost;port=3306;dbname=elphil','root','');


$alldata=$product->getProducts();

return [$alldata];

?>