<?php
include($_SERVER['DOCUMENT_ROOT']."/shop/config/config.php");
include($_SERVER['DOCUMENT_ROOT']."/shop/config/function.php");


$page = (int) $_GET['page'];

$sql_count_rows = "SELECT COUNT(id) as len FROM products_27";
$result_count_rows =  mysqli_query($db, $sql_count_rows);

if($result_count_rows){
    $result_count_rows_arr = mysqli_fetch_assoc($result_count_rows);
    $count_row =  $result_count_rows_arr['len'];  #12
  
}else{
    echo "либо что то с товарами, либо с базой данных";
}

$count_products_on_page = 5;

$count_page = ceil($count_rows/$count_products_on_page);


$response = [
    'products' => [],
    'pagination' => [
        'countPage' => count_page,
        'nowPage' => $page 
    ]
];

$from_row = $count_products_on_page * (page - 1);

// 1 - 0
// 2 - 5
// 3 -10


$sql_products = "SELECT  * FROM products_27 limit {$from_row}, {$count_products_on_page} ";

$result_products = mysqli_query($db, $sql_products);
// limit - mysqli специфичная конструкция


while($row = mysqli_fetch_assoc($result_products)){
    // d($row);
    $response['products'][] = $row;
}


echo json_encode($response);
// здесь нам нужен json encode

?>