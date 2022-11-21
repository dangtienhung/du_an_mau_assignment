<?php

@session_start();

class c_user
{
    // lấy thông tin của người dùng
    public function read_user()
    {
        include('models/m_user.php');
        $c_user = new m_user();

        if (isset($_SESSION['id_customer'])) {
            $id = $_SESSION['id_customer'];
            $user = $c_user->read_user($id);
        }

        $view = 'views/user/v_user.php';
        include('template/front-end/content.php');
    }

    // chỉnh sửa thông tin của người dùng
    public function edit_user()
    {
        include('models/m_user.php');
        $c_user = new m_user();

        if (isset($_SESSION['id_customer'])) {
            $id = $_SESSION['id_customer'];
            $user = $c_user->read_user($id);
        }

        $view = 'views/user/v_edit_user.php';
        include('template/front-end/content.php');
    }

    public function edit_user_handle()
    {
        if (isset($_POST['btn-submit'])) {
            $id = $_SESSION['id_customer'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $image = $_FILES['image'];
            $avatar = ($image['error'] == 0) ? $image['name'] : '';
            $file_name = '';
            if ($avatar != '') {
                $folder = 'admin/public/front-end/images/customer/';
                $file_extension = explode('.', $avatar)[1];
                $file_name = time() . '.' . $file_extension;
                $path_file = $folder . $file_name;
                move_uploaded_file($image['tmp_name'], $path_file);
            } else {
                $file_name = $_SESSION['customer_avatar'];
            }

            $this->session_user($id, $username, $email, $password, $file_name);
            header('location: users.php');
        }
    }

    public function session_user($id, $username, $email, $password, $file_name)
    {
        include('models/m_user.php');
        $c_user = new m_user();
        $result = $c_user->update_user_handle($id, $username, $email, $password, $file_name);
    }
}