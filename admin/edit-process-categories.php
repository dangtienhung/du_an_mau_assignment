<?php

@session_start();
include('controllers/c_prouduct-categories.php');

if (isset($_SESSION['id_admin'])) {
    $edit = new c_product_category();
    $edit->edit_category();
} else {
    header('location: index.php');
}