<?php
require_once('./model/Models.php');

$model = new Model();

if (isset($_GET['term'])){
    $term = $_GET['term'];
    $products = $model->getProductByKeyword($term);

    $result = array();
    foreach($products as $key=>$value){
        array_push($result, array("id"=>$value["product_name_en"], "label"=>$value["product_name_en"], "value" => $value["product_name_en"]));
    }
    echo json_encode($result);
    return;
}
$keyword = isset($_GET["keyword"]) ? $_GET["keyword"] : "";
$products = $model->getProductByKeyword($keyword);

echo json_encode($products);
return;
