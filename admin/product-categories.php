<?php

@session_start();
include('controllers/c_prouduct-categories.php');

if (isset($_SESSION['id_admin'])) {
    $product_category = new c_product_category();
    $product_category->list_products();
} else {
    header('location: index.php');
}