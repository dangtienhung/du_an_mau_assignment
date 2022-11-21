<?php

@session_start();

if (isset($_SESSION['id_admin'])) {
    include 'controllers/c_products.php';

    $c_products = new c_products();
    $c_products->index();
} else {
    header('location: index.php');
}