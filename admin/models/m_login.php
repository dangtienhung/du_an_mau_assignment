<?php

include_once 'database.php';

class m_login extends database
{
    public function read_login($email, $password)
    {
        $sql = "select * from admin where admin_email = ? and admin_password = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email, md5($password)));
    }
}