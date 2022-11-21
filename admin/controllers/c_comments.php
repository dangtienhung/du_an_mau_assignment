<?php

include('models/m_comments.php');

class c_comments
{
    public function __construct()
    {
    }
    /* lấy ra tất cả các bình luận */
    // public function count_comment()
    // {
    //     $c_comments = new m_comments();
    //     $comments = $c_comments->count_comment();

    //     $views = 'views/products/v_delete.php';
    //     include('template/front-end/layout.php');
    // }

    /* lấy ra tất cả các bình luận */
    public function read_comments()
    {
        $c_comments = new m_comments();
        $comments = $c_comments->read_comments();

        $view = 'views/comments/v_comments.php';
        include('template/front-end/layout.php');
    }

    /* xóa bình luận */
    public function delete_comment()
    {
        $c_comments = new m_comments();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            echo '>> id: ' . $id;
            $c_comments->delete_comment($id);
            header('location: comments.php');
        }
    }

    // edit comment
    public function edit()
    {
        $c_comments = new m_comments();
        $comments = $c_comments->read_one_comments();
        $view = 'views/comments/v_edit-comments.php';
        include('template/front-end/layout.php');
    }

    public function edit_comment()
    {
        if (isset($_POST['btn-submit'])) {
        }
    }
}