<?php

@session_start();

include 'controllers/c_customers.php';

if (isset($_SESSION['id_admin'])) {
    $customer = new c_customers();
    // $customer->
    // echo 'ahihi đặng tiến hưng';
    $customer->create_customer_view();
} else {
    echo 'not found 404';
}