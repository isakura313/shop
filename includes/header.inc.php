<?php
include($_SERVER['DOCUMENT_ROOT']."/shop/config/config.php");
include($_SERVER['DOCUMENT_ROOT']."/shop/config/function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?=$pageConfig['title']?> </title>
    <?php foreach ($pageConfig['cssFiles'] as $path_css): ?>
    <link rel="stylesheet" href="<?=$path_css?>">
<?php endforeach; ?>

</head>
<body>
    <div class="wrapper">
    <header>
    <nav>
    <a href="/catalog.php?section=man">Мужское</a>
    <a href="/catalog.php?section=girl">Женское</a>
    <a href="/catalog.php?section=child">Детское</a>
    <div class="basket">
        <a href="/basket.php">  Товаров (<span> 0 </span>)</a>
    </div>
    </nav>

    
 

