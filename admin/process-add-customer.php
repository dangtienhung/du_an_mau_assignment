<?php

@session_start();

include('controllers/c_customers.php');

if (isset($_SESSION['id_admin'])) {
    $customer = new c_customers();
    $customer->create_customer();
} else {
    echo 'not found';
}