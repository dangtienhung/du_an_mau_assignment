<?php
@session_start();

if (isset($_SESSION['id_admin'])) {
    include('controllers/c_customers.php');
    $customer = new c_customers();
    $customer->edit_customer();
} else {
    header('location: index.php');
}