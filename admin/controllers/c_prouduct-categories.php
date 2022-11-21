<?php

include('models/m_product-categories.php');

class c_product_category
{
    // render list product_categories 
    public function list_products()
    {
        $c_product_category = new m_product_category();

        $search = '';

        if (isset($_GET['search'])) {
            $search = $_GET['search'];
        }

        // $result_search = $c_product_category->search_product_categories($search);
        $list_categories = $c_product_category->list_products($search);

        $view = 'views/product-categories/v_product-categories.php';
        include('template/front-end/layout.php');
    }

    // render product categories item
    public function product_category()
    {
        $c_product_category = new m_product_category();
        $product_category = $c_product_category->product_category();

        $view = 'views/product-categories/v_edit_categories.php';
        include('template/front-end/layout.php');
    }

    // delete product category
    public function delete_category()
    {
        $c_product_category = new m_product_category();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $c_product_category->delete($id);
            header('location: product-categories.php');
        }
    }

    // insert a new category
    public function insert_category()
    {
        if (isset($_POST['btn-submit'])) {
            $name = $_POST['descrtiption'];
            $desc = $_POST['desc'];
            $c_product_category = new m_product_category();
            $c_product_category->insert($name, $desc);
        }

        $view = 'views/product-categories/v_insert_categories.php';
        include('template/front-end/layout.php');
    }

    public function insert_categories()
    {
        if (isset($_POST['btn-submit'])) {
            $name = $_POST['username'];
            $desc = $_POST['descrtiption'];
            $c_product_category = new m_product_category();
            $result = $c_product_category->insert($name, $desc);
            header('location: product-categories.php');
        }
    }

    // edit
    public function edit_category()
    {
        if (isset($_POST['btn-submit'])) {
            $id = $_POST['id'];
            $name = $_POST['username'];
            $desc = $_POST['descrtiption'];
            $c_product_category = new m_product_category();
            $result = $c_product_category->edit_category($id, $name, $desc);
            header('location: product-categories.php');
        }
    }
}