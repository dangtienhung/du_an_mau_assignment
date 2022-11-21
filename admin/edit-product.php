<?php

@session_start();

if (isset($_SESSION['id_admin'])) {
    include 'controllers/c_products.php';
    $edit_product = new c_products();
    $edit_product->c_edit_product();
} else {
    header('location: index.php');
}