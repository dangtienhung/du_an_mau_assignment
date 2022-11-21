<?php

include('models/m_comments.php');

class c_comment
{
    public function __construct()
    {
    }

    // render comments
    public function read_comments()
    {
        $c_comment = new c_comment();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $comments = $c_comment->read_comments($id);
            echo '<pre>';
            print_r($comments);
            // print_r($id);
            echo '</pre>';
        }
    }

    // sử lí thêm comments vào dbase
    public function handle_insert_comment()
    {
        if (isset($_POST['btn-submit'])) {
            $id_product = $_POST['id_product'];
            $id_customer = $_POST['id_customer'];
            $message = $_POST['message'];

            $c_comment = new m_comment();
            $message = $c_comment->m_insert_comment($id_customer, $id_product, $message);
            header('location: details.php?id=' . $id_product);
        }
    }
}