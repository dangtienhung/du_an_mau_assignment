<?php

@session_start();
include('controllers/c_customers.php');

if (isset($_SESSION['id_admin'])) {
    $customer = new c_customers();
    $customer->handle_edit_customer();
} else {
    header('location: index.php');
}