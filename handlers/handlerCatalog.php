<?php
/**
 * @var $link string
 */
//Файл для получения данных о каталоге
include($_SERVER['DOCUMENT_ROOT']. '/parts/header_conf.php');

$category_id = $_GET['category_id'];
$per_page = 1;
$current_page = !isset($_GET['page']) ? 1 : $_GET['page'];
$from_record = ($current_page - 1) * $per_page;

$sql_products = "SELECT * FROM products INNER JOIN product_category ON products.id = product_category.product_id WHERE product_category.category_id = {$category_id}";
//заменяет * на COUNT(*) в строчке $sql_products
$sql_count_products = str_replace('*', 'COUNT(*)', $sql_products);
$response = [
    'products' => get_db_result_assoc($link, $sql_products, null, [$from_record, $per_page]),
    'pagination' => [
        'current_page' => $current_page,
        'pages_count' => get_records_agregate_by($link, $sql_count_products),
    ],
];
//$response['products'] = get_db_result_assoc($link, $sql_products);
sleep(1);
echo json_encode($response);