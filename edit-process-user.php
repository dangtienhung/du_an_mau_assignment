<?php

@session_start();

if (isset($_SESSION['id_customer'])) {

    include('controllers/c_user.php');
    $user = new c_user();
    $user->edit_user_handle();
} else {
    echo 'loix';
}