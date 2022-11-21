<?php

@session_start();

include('controllers/c_prouduct-categories.php');

if (isset($_SESSION['id_admin'])) {
    $insert = new c_product_category();
    $insert->insert_categories();
} else {
    header('location: index.php');
}