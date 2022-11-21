<?php
@session_start();

include('controllers/c_comments.php');

if (isset($_SESSION['id_admin'])) {
    $comments = new c_comments();
    $comments->read_comments();
}