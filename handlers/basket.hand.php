<?php
    session_start();

    $response = [
        'basket'=>[
            'count' =>0
        ]
    ];

//добавление товара в корзину
$_GET['product_id'] = 5;


if(isset( $_GET['product_id'] ) ){
    if( !isset($_SESSION['backet'] )  ) {
        $_SESSION['basket'] = [];
    }
    $is_find = false;
    foreach($_SESSION['basket'] as $key => $basketItem){
        if($basketItem['product_id'] == $_GET['product_id']){
            $_SESSION['basket']['key']['count']++;
            $is_find = true;
            // товары получены и количество учтено
        }
    }
    if(!$is_find){
        $_SESSION['basket'][] = [
            'product_id' => $_GET['product_id'],
            'count' => 1
        ];
    }
}

//Подсчет товаров в корзине

if(isset($_SESSION['basket'] )  ){
    foreach($_SESSION['basket'] as $basketItem){
        $response['basket']['count']  += $basketItem['count'];
    }
}
