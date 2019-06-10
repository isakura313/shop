<?php
    $pageConfig = [
            'title'=> "Карточка товара",
            'cssFiles'=>[
                'css/style.css'
            ],
            'jsFiles' =>[
                'js/script.js'
            ],

    ];

include($_SERVER['DOCUMENT_ROOT']."/shop/includes/header.inc.php");

$_GET['id'] = 3;
$template = [
    'product'=>[],
    'catalog' =>[]
];

if(isset($_GET['id'] ) ){
    //нужно сходить за товаром в базу данных и узнать о нем все
$sql = "SELECT * FROM products_27 WHERE id={$_GET['id']}";
$result = mysqli_query($db, $sql);


$sql_products_catalog = "SELECT * FROM product_catalog_27 WHERE id={$_GET['id']}";
$result_products_catalog = mysqli_query($db, $sql_products_catalog);
$catalog_id = mysqli_fetch_assoc($result_products_catalog)['catalog_id'];


$sql_catalog = "SELECT * FROM catalogs_27 WHERE id={$catalog_id}";
$result_catalog = mysqli_query($db, $sql_catalog);



$template['catalog'] = mysqli_fetch_assoc($result_catalog);
$template['product'] = mysqli_fetch_assoc($result);
// d($template);

} else{
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /shop/catalog.php");
}

//что бы это заработало, нужно сходить в бд, получить данные о карточке товара
//и потом заполнить наш $template;


?>

<?php if(!empty($template['product'])): ?>
<!-- здесь у нас выводятся данные о товаре -->
<div>  <?=$template['catalog']['name']?> </div>
<div class="product">
    <div class="product-photo">
        <img src="<?=$template['product']['img_src']?>"   alt="<?=$template['product']['title']?>"  
        
        title="<?=$template['product']['title']?>" 
         >
        </div>

    <div class="product-name"> <?=$template['product']['name']?> </div>
    <div class="product_sku"> <?=$template['product']['sku']?>    </div>
    <div class="product_price"> <?=$template['product']['price']?>    </div>
    <div class="product_desc"> <?=$template['product']['description']?>    </div>
                            <h5> Размер </h5>
                        <div> Добавить в корзину  </div>

    </div>
<?php else: ?>
    <h2> Такого товара у нас нет. Свяжитесь с нами по телефону </h2>
<?php endif; ?>

<?php
include($_SERVER['DOCUMENT_ROOT']."/shop/includes/footer.inc.php");
?>