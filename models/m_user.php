<?php

include('database.php');

class m_user extends database
{
    // lấy ra người dùng 
    public function read_user($id)
    {
        $sql = "select * from cus where id_customer = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    // update customer
    public function update_user_handle($id, $customers_name, $customer_email, $customer_password, $customer_avatar)
    {
        $sql = "update cus
                set
                customers_name = '$customers_name',
                customer_email = '$customer_email',
                customer_password = '$customer_password',
                customer_avatar = '$customer_avatar'
                where
                id_customer = '$id'";
        $this->setQuery($sql);
        return $this->execute(array($id, $customers_name, $customer_email, $customer_password, $customer_avatar));
    }
}