<?php

class c_products
{
    public function __construct()
    {
    }

    public function index()
    {
        include 'models/m_products.php';
        $m_products = new m_products();

        // pagination
        $page = 1;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        // tìm kiến sản phẩm
        $search = '';
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
        }

        $sql_product = $m_products->get_count_search($search);

        $number_in_on_page = 3;
        $number_page = ceil($sql_product / $number_in_on_page);
        $clear = $number_in_on_page * ($page - 1);

        $list_products = $m_products->read_product_list($search, $number_in_on_page, $clear);

        $view = 'views/products/v_products.php';
        include('template/front-end/layout.php');
    }

    public function c_create_product()
    {
        // lấy ra danh sách các loại sản phẩm
        include('models/m_products.php');
        $product_categories = new m_products();
        $list_product_categories = $product_categories->read_product_category();

        /* edit */
        if (isset($_POST['btn-submit'])) {
            $name_product = $_POST['name_product'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $photo = $_FILES['image'];
            $image = ($photo['error'] == 0) ? $photo['name'] : '';
            $file_extension = explode('.', $image)[1];
            $file_name = time() . '.' . $file_extension;
            $description = $_POST['descrtiption'];
            $name_product_categories = $_POST['product_categories'];
            $c_product = new m_products();
            $result = $c_product->m_create_product($name_product, $price, $sale, $file_name, $description, $name_product_categories);
            if ($result) {
                if ($image != '') {
                    $folder = 'public/front-end/images/products/';
                    $path_file = $folder . $file_name;
                    move_uploaded_file($photo['tmp_name'], $path_file);
                }
                echo "<script>alert('thành công')</script>";
                header('location: products.php');
            } else {
                echo "<script>alert('thêm không thành công')</script>";
            }
        }
        $view = "views/products/v_add-product.php";
        include('template/front-end/layout.php');
    }

    /* delete */
    public function c_delete_product()
    {
        include('models/m_products.php');

        $m_products = new m_products();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $c_delete_product = $m_products->m_delete_product($id);
            header('location: products.php');
        }

        $view = 'views/products/v_delete.php';
        include('template/front-end/content.php');
    }

    /* edit */
    public function c_edit_product()
    {
        include('models/m_products.php');
        $m_product = new m_products();
        $each_row = $m_product->m_read_one_row();
        $list_product_categories = $m_product->read_product_category();

        if (isset($_POST['btn-submit'])) {
            $id_product = $_POST['id_product'];
        }

        $view = 'views/products/v_edit-product.php';
        include('template/front-end/layout.php');
    }

    public function m_edit_process_product()
    {
        include('models/m_products.php');
        $m_product = new m_products();

        if (isset($_POST['btn-submit'])) {
            $id = $_POST['id_product'];
            $name_product = $_POST['name_product'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $description = $_POST['descrtiption'];
            $name_product_categories = $_POST['product_categories'];
            $photo_new = $_FILES['image-new'];
            $image = ($photo_new['error'] == 0) ? $photo_new['name'] : '';

            $folder = 'public/front-end/images/products/';

            if ($photo_new['size'] > 0 && $photo_new['error'] == 0) {
                $file_extension = explode('.', $photo_new['name'])[1];
                $file_name = time() . '.' . $file_extension;
                $path_file = $folder . $file_name;
            } else {
                $file_name = $_POST['image-old'];
            }
            $result = $m_product->m_edit_product($id, $name_product, $price, $sale, $file_name, $description, $name_product_categories);

            if ($result) {
                if ($image != '') {
                    move_uploaded_file($photo_new['tmp_name'], $path_file);
                }
                echo "<script>alert('Update thành công!')</script>";
                header('location: products.php');
            } else {
                echo "<script>alert('Update không thành công!')</script>";
                header('location: products.php');
            }
        }
    }
}