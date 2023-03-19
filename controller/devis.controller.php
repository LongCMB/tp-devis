<?php

require_once 'model/products.model.php';

$products = getProducts();


foreach($products as $key=>$value){
    $total[$key] = intval($_POST[$key]) * $value;
}



$total_ht = 0;
foreach($total as $value){
    $total_ht += $value;
}

$tva = $total_ht * 0.1;
$total_ttc = $total_ht + $tva;

require_once 'view/devis.view.php';