<?php

include('controllers/c_login.php');

$c_login = new c_login_customer();
$c_login->check_register();