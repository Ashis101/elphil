<?php 
include_once('../session/isexists.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <?php include_once('./layout/nav.php')?>
    
    <form action="../controller/upload.php" method="post" enctype="multipart/form-data">
        <label for="">Image</label>
        <input type="file" name="file">
        <label for="">Imagename</label>
        <input type="text" name="imagename" id="">
        <label for="">Price</label>
        <input type="text" name="price" id="">
        <label for="">Model</label>
        <input type="text" name="model" id="">
        <label for="">Description</label>
        <input type="text" name="desc">
        <button type="submit">Upload</button>
    </form>
</body>
</html>