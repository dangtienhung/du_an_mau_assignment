<?php

@session_start();

if (isset($_SESSION['id_admin'])) {
    include('controllers/c_products.php');
    $edit_process = new c_products();
    $edit_process->m_edit_process_product();
} else {
    header('location: index.php');
}