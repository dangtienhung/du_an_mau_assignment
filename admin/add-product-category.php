<?php

@session_start();
include('controllers/c_prouduct-categories.php');

if (isset($_SESSION['id_admin'])) {
    $add_category = new c_product_category();
    $add_category->insert_category();
} else {
    header('location: index.php');
}