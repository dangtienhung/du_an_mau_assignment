<?php

class c_home
{
    public function __construct()
    {
    }

    public function index()
    {
        include('models/m_home.php');
        $c_home = new m_home();
        $list_product_sale = $c_home->list_products();
        $list_categories = $c_home->list_product_categories();
        $products = $c_home->products();

        $view = "views/home/v_home.php";
        include("template/front-end/layout.php");
    }
}