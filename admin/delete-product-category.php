<?php

@session_start();
include('controllers/c_prouduct-categories.php');

if (isset($_SESSION['id_admin'])) {
    $delete = new c_product_category();
    $delete->delete_category();
} else {
    header('location: index.php');
}