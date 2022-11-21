<?php

@session_start();

if (isset($_SESSION['id_admin'])) {
    include 'controllers/c_products.php';
    $c_product = new c_products();
    $c_product->c_delete_product();
} else {
    header('location: index.php');
}