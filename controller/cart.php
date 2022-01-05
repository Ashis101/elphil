<?php

require_once('../model/product.php');

$id=$_POST['productid'];

$product=new Product('mysql:host=localhost;port=3306;dbname=elphil','root',''); 
$product->addtocart($id);
// $length=count($_SESSION['cart']);
// var_dump($length);

header('Location:/elphil/view/index.php');


?>