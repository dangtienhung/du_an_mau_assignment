<?php

include('controllers/c_details.php');

if (isset($_GET['comment'])) {
    $delete = new c_detail();
    $delete->delete_comment();
} else {
    header('location: index.php');
}