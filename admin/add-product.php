<?php

@session_start();
if (isset($_SESSION['id_admin'])) {
    include("controllers/c_products.php");
    $banner = new c_products();
    $banner->c_create_product();
} else {
    header("location:login.php");
}