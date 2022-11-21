<?php

include('controllers/c_comments.php');

$comment = new c_comment();
$comment->handle_insert_comment();