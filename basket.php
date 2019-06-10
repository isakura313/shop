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
?>
<!-- здесь будет контент -->

<?php
include($_SERVER['DOCUMENT_ROOT']."/shop/includes/footer.inc.php");
?>