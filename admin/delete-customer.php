<?php

@session_start();

include('controllers/c_customers.php');

if (isset($_SESSION['id_admin'])) {
    $delete_customer = new c_customers();
    $delete_customer->delete_customer();
}