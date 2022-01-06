<?php

require_once('../model/product.php');

$name=$_POST['imagename'];
$price=$_POST['price'];
$model=$_POST['model'];
$desc=$_POST['desc'];
$image=$_FILES['file'];

$product=new Product('mysql:host=localhost;port=3306;dbname=elphil','root',''); 
$issave=$product->addData($name,$price,$model,$desc,$image);
// $product->addData($name,$price,$model,$desc,$image);
if($issave){
    header('Location:/elphil/view/index.php');
}else{
    header('Location:/elphil/view/upload.php');
}

// var_dump($issave);

echo $_SESSION['user']['id'];
?>