<?php

@session_start();

if (isset($_SESSION['id_admin'])) {
    include 'controllers/c_home.php';
    $c_home = new c_home();
    $c_home->index();
} else {
    header('location: index.php');
}