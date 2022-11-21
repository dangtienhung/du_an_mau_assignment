<?php

include 'controllers/c_details.php';
include 'controllers/c_comments.php';

if (isset($_GET['id'])) {
    $c_detail = new c_detail();
    $c_detail->index();
} else {
    header('location: index.php');
}