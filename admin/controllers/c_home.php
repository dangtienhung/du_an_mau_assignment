<?php

include('models/m_home.php');

class c_home
{
    public function index()
    {
        $analytics = new m_home();
        // lấy ra số lượng các loại sản phẩm
        $product_count = $analytics->count_products();
        // lấy ra số lượng người dùng
        $customer_count = $analytics->count_customers();
        // lấy ra số lượng bình luận của khách hàng
        $comment_count = $analytics->count_comments();
        // lấy ra số lượng các loại sản phẩm
        $count_product_categories = $analytics->count_product_categories();

        $view = 'views/home/v_home.php';
        include 'template/front-end/layout.php';
    }
}