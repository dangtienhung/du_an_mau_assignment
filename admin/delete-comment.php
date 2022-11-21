<?php

@session_start();

include('controllers/c_comments.php');

if (isset($_SESSION['id_admin'])) {
    $comment = new c_comments();
    $comment->delete_comment();
} else {
    echo 'lỗi';
}