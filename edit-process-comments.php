<?php

@session_start();

include('controllers/c_details.php');

if (isset($_SESSION['id_customer'])) {
    $edit = new c_detail();
    $edit->edit_process_comment();
} else {
    echo 'loi';
}