<?php

@session_start();

include('controllers/c_login.php');
if (isset($_GET['func'])) {
    $c_login = new c_login_customer();
    $c_login->logout();
}