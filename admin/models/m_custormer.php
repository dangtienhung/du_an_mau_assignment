<?php

include('database.php');

class m_customer extends database
{
    /* lấy ra tất cả các người dùng */
    public function read_customer($search)
    {
        $sql = "select * from cus where customers_name like '%$search%'";
        $this->setQuery($sql);
        return $this->loadAllRows(array($search));
    }

    /* lấy ra 1 người dùng */
    public function read_one_customer()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $sql = "select * from cus where cus.id_customer = '$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    /* thêm người dùng */
    public function create_customer($customers_name, $customer_email, $customer_password, $customer_avatar)
    {
        $sql = "insert into cus(customers_name, customer_email, customer_password, customer_avatar)
                values (?, ?, ?, ?);";
        $this->setQuery($sql);
        return $this->execute(array($customers_name, $customer_email, $customer_password, $customer_avatar));
    }

    /* chỉnh sửa người dùng */
    public function edit_customer($id_customer, $customers_name, $customer_email, $customer_password, $customer_avatar)
    {
        $sql = "update cus
                set
                customers_name = '$customers_name',
                customer_email = '$customer_email',
                customer_password = '$customer_password',
                customer_avatar = '$customer_avatar'
                where
                id_customer = '$id_customer';";
        $this->setQuery($sql);
        return $this->execute(array($customers_name, $customer_email, $customer_password, $customer_avatar, $id_customer));
    }

    /* xóa người dùng */
    public function delete_customer($id_customer)
    {
        $sql = "delete from cus where id_customer = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_customer));
    }

    /* check người dùng khi đăng kí có bị trùng email không? */
    public function check_email($email)
    {
        $sql = "select count(*) from cus where 	customer_email = ?";
        $this->setQuery($sql);
        return $this->execute(array($email));
    }
}