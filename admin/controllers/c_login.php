<?php

include('models/m_login.php');

@session_start();

class c_login
{
    public function checkLogin()
    {
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['current-password'];
            $this->saveLoginSession($email, $password);
            if (isset($_SESSION['id_admin'])) {
                header("location:home.php");
            } else {
                $_SESSION['error_login'] = "Sai thông tin đăng nhập";
                header("location:index.php");
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['id_admin']);
        unset($_SESSION['admin_usename']);
        unset($_SESSION['admin_avatar']);
        unset($_SESSION['error_login']);
        header("location:index.php");
    }

    public function saveLoginSession($email, $password)
    {
        $m_user = new m_login();
        echo '<pre>';
        print_r($m_user);
        echo '</pre>';
        $user = $m_user->read_login($email, $password);
        echo '<pre>';
        print_r($user);
        echo '</pre>';
        if (!empty($user)) {
            $_SESSION['id_admin'] = $user->id_admin;
            $_SESSION['admin_usename'] = $user->admin_usename;
            $_SESSION['admin_avatar'] = $user->admin_avatar;
        }
    }
}