<?php

include('database.php');

class m_login_customer extends database
{
    public function m_insert_login_customer($customers_name, $customer_email, $customer_password)
    {
        $sql = "insert into cus(customers_name, customer_email, customer_password, customer_avatar)
            values (?, ?, ?, null);";
        $this->setQuery($sql);
        return $this->execute(array($customers_name, $customer_email, $customer_password));
    }

    public function m_get_login_customer($customer_email, $customer_password)
    {
        $sql = "select * from cus where customer_email = ? and customer_password = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($customer_email, $customer_password));
    }
}