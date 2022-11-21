<?php

class c_detail
{
    public function __construct()
    {
    }

    public function index()
    {
        include 'models/m_detail.php';
        $m_detail = new m_detail();
        $detail = $m_detail->read_detail();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $list_detail = $m_detail->get_product_categories($id);
            $comments = $m_detail->read_comments($id);
            $count_comment = $m_detail->count_comments($id);
        }

        $view = "views/details/v_details.php";
        include('template/front-end/layout.php');
    }

    // ==========================================================
    // xóa bình luận của người dùng
    public function delete_comment()
    {
        include('models/m_detail.php');
        $delete = new m_detail();

        if (isset($_GET['comment'])) {
            $id_comment = $_GET['comment'];
            $id_product = $_GET['product'];
            $result = $delete->delete_comment($id_comment);
            header('location: details.php?id=' . $id_product);
        }
    }

    /* ============================================================= */
    /* sửa bình luận */
    public function edit_comment()
    {
        include('models/m_detail.php');
        $edit = new m_detail();
        $detail = $edit->read_detail();

        if (isset($_GET['id'])) {
            $id_product = $_GET['id'];
            $id_comment = $_GET['comment'];
            $desc = $_GET['desc'];
            $list_detail = $edit->get_product_categories($id_product);
            $comments = $edit->get_all_cmt_not_id($id_comment, $id_product);
            $count_comment = $edit->count_comments($id_product);
            // $result = $edit->edit_comment($id_comment, $desc);
        }

        $view = 'views/details/v_edit_comment.php';
        include('template/front-end/layout.php');
    }

    public function edit_process_comment()
    {
        include('models/m_detail.php');
        $edit = new m_detail();
        if (isset($_POST['btn-submit'])) {
            $id_customer = $_POST['id_customer'];
            echo '>> cus: ' . $id_customer;
            $desc = $_POST['message'];
            echo '>>> ' . $desc;
            $id_product = $_POST['id_product'];
            echo '>>> ' . $id_product;
            $id_comment = $_POST['comment'];
            echo '>>> ' . $id_comment;
            $result = $edit->delete_comment($id_comment);
            $each = $edit->inser_comment($id_customer, $id_product, $desc);
            header('location: details.php?id=' . $id_product);
        }
    }
}