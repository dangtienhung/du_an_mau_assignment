<?php

include('controllers/c_details.php');

if (isset($_GET['edit-comment']) && $desc = $_GET['desc']) {
    $edit = new c_detail();
    $edit->edit_comment();
} else {
    echo 'ahihi';
}