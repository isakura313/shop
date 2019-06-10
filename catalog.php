<?php
    $pageConfig = [
            'title'=> "Каталог",
            'cssFiles'=>[
                'css/style.css',
                'css/catalog.css'
                
            ],
            'jsFiles' =>[
                'js/script.js',
                'js/catalog.js'
                
            ],

    ];

include($_SERVER['DOCUMENT_ROOT']."/shop/includes/header.inc.php");
?>
<!-- здесь будет контент -->
<div class="catalog">
    <div class="catalog-filters"> </div>
    <div class="catalog-products"> </div>
    <div class="catalog-pagination"> </div>
</div>

<?php
include($_SERVER['DOCUMENT_ROOT']."/shop/includes/footer.inc.php");
?>