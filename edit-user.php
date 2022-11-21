<?php

@session_start();

include('controllers/c_user.php');

if (isset($_SESSION['id_customer'])) {
    $edit_user = new c_user();
    $edit_user->edit_user();
} else {
    echo 'looix';
}