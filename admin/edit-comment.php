<?php

@session_start();
include('controllers/c_comments.php');

if (isset($_SESSION['id_admin'])) {

    $edit = new c_comments();
    $edit->edit();
} else {
    header('location: index.php');
}