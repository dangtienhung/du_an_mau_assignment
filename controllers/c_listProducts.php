<?php

class c_list_products
{
    public function __construct()
    {
    }

    public function index()
    {
        include 'models/m_listProducts.php';
        $m_list_products = new m_listProducts();
        $list_products = $m_list_products->read_list_products();
        $list_products_categories = $m_list_products->list_products_categories();

        $view = "views/listProducts/v_listproducts.php";
        include('template/front-end/layout.php');
    }
}