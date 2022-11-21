<?php

@session_start();

if ((isset($_SESSION['id_customer']))) {
    include('controllers/c_user.php');
    $user = new c_user();
    $user->read_user();
} else {
    header('location: index.php');
}