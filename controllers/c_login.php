<?php

include('models/m_login.php');

@session_start();

class c_login_customer
{
    public function check_register()
    {
        if (isset($_POST['sign-up'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if ($username == '' || $email == '' || $password == '') {
                header('location: log.php?error=Không được để trống!');
            } else {
                $c_login_customer = new m_login_customer();
                $c_login_customer->m_insert_login_customer($username, $email, $password);
                header('location: log.php');
                echo "<script>alert('Đăng ký thành công!')</script>";
            }
        }
    }

    public function check_login()
    {
        if (isset($_POST['sign-in'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->session_login_customer($email, $password);
            if (isset($_SESSION['id_customer'])) {
                header('location: index.php');
            } else {
                $_SESSION['error_login'] = "Sai thông tin đăng nhập";
                header('location: log.php');
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['id_customer']);
        unset($_SESSION['customers_name']);
        unset($_SESSION['customer_email']);
        unset($_SESSION['customer_avatar']);
        unset($_SESSION['error_login']);
        header('location: index.php');
    }

    public function session_login_customer($email, $password)
    {
        $c_login_customer = new m_login_customer();
        $customer_customer = $c_login_customer->m_get_login_customer($email, $password);
        if (!empty($customer_customer)) {
            $_SESSION['id_customer'] = $customer_customer->id_customer;
            $_SESSION['customers_name'] = $customer_customer->customers_name;
            $_SESSION['customer_avatar'] = $customer_customer->customer_avatar;
            $_SESSION['customer_email'] = $customer_customer->customer_email;
        }
    }
}