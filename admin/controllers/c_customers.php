<?php

class c_customers
{
    public function __construct()
    {
    }

    /* lấy ra tất cả các loại sản phẩm */
    public function index()
    {
        include('models/m_custormer.php');
        $c_customers = new m_customer();

        // tìm kiến sản phẩm
        $search = '';
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
        }

        $list_customers = $c_customers->read_customer($search);
        $view = 'views/customers/v_customers.php';
        include('template/front-end/layout.php');
    }

    /* xóa người dùng */
    public function delete_customer()
    {
        include('models/m_custormer.php');
        $delete_customer = new m_customer();
        if (isset($_GET['id'])) {
            $id =  $_GET['id'];
            $result = $delete_customer->delete_customer($id);
            if ($result) {
                echo "<script>alert('thành công')</script>";
                header('location: customers.php');
            } else {
                echo "<script>alert('thất bại')</script>";
                header('location: customers.php');
            }
        }
    }

    /* thêm người dùng mới */
    public function create_customer_view()
    {
        $view = 'views/customers/v_add-customer.php';
        include('template/front-end/layout.php');
    }

    public function create_customer()
    {
        include('models/m_custormer.php');
        $c_customer = new m_customer();
        if (isset($_POST['btn-submit'])) {
            $username = $_POST['username'];
            $avatar = $_FILES['image'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $avatar_name = ($avatar['error'] == 0) ? $avatar['name'] : '';
            $result = $c_customer->create_customer($username, $email, $password, $avatar_name);
            if ($result) {
                if ($avatar_name != '') {
                    $folder = 'public/front-end/images/customer/';
                    $file_extension = explode('.', $avatar_name)[1];
                    $file_name = time() . '.' . $file_extension;
                    $path_file = $folder . $file_name;
                    move_uploaded_file($avatar['tmp_name'], $path_file);
                }
                header('location: customers.php');
                echo "<script>alert('thành công')</script>";
            } else {
                echo "<script>alert('thêm không thành công')</script>";
            }
        }
    }

    /* edit người dùng */
    public function edit_customer()
    {
        include('models/m_custormer.php');

        $customer = new m_customer();
        $each = $customer->read_one_customer();

        $view = 'views/customers/v_edit-customer.php';
        include('template/front-end/layout.php');
    }

    public function handle_edit_customer()
    {
        include('models/m_custormer.php');

        $customer = new m_customer();
        if (isset($_POST['btn-submit'])) {
            $id_customer = $_POST['id'];
            $customers_name = $_POST['username'];
            $customer_avatar = $_FILES['image_new'];
            $avatar_new = ($customer_avatar['error'] == 0) ? $customer_avatar['name'] : '';
            $customer_email = $_POST['email'];
            $customer_password = $_POST['password'];
            if ($avatar_new != '' && $customer_avatar['size'] > 0) {
                $folder = 'public/front-end/images/customer/';
                $file_extension = explode('.', $avatar_new)[1];
                $file_name = time() . '.' . $file_extension;
                $path_file = $folder . $file_name;
                move_uploaded_file($customer_avatar['tmp_name'], $path_file);
            } else {
                if (isset($_POST['image_old'])) {
                    $photo_old = $_POST['image_old'];
                } else {
                    $photo_old = 'avatar-trang-facebook.jpg';
                }
                $file_name = $photo_old;
            }
            $result = $customer->edit_customer($id_customer, $customers_name, $customer_email, $customer_password, $file_name);
            header('location: customers.php');
        }
    }
}