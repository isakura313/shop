<?php
    $pageConfig = [
        'title'=> "Корзина",
        'cssFiles'=>[
            'css/style.css',
            'css/basket.css'
        ],
        'jsFiles' =>[
            'js/script.js'
        ],

];

include($_SERVER['DOCUMENT_ROOT']."/shop/includes/header.inc.php");
// include($_SERVER['DOCUMENT_ROOT']."/shop/config/function.php");
include($_SERVER['DOCUMENT_ROOT']."/shop/handlers/basket.hand.php");


// session_start();

$template = [
    'products' => []
];

// d($_SESSION);


 foreach( $_SESSION['basket'] as $basketItem){
$sql = "SELECT * FROM  products_27 WHERE id = {$basketItem['product_id']}";
$result = mysqli_query( $db, $sql);

$product = mysqli_fetch_assoc($result);
$product['count'] = $basketItem['count'];
$product['final_price'] = $basketItem['count'] * $product['price'];
$template['products'][] = $product;

 d($product);
}

?>
<!-- здесь у нас пойдет корзина -->
<div class="basket-box">
<?php if(!empty($template['products'])): ?>
<?php foreach($template['products'] as $productItem): ?>
<div class="basket-box-item">
    <div class="basket-box-item-name">
    <?=$productItem['name']?> </div>
</div>
<?php endforeach; ?>

<?php else: ?>
<h3> В вашей корзине нет ни одной вещи! Быстро взял и купил! </h3>
<?php endif; ?>


</div>


<?php
include($_SERVER['DOCUMENT_ROOT']."/shop/includes/footer.inc.php");
?>