<?php

require_once('database.php');

class m_listProducts extends database
{
    public function read_list_products()
    {
        $sql = "select * from products";
        $this->setQuery($sql);
        /* Lấy dữ liệu nhiều dòng */
        return $this->loadAllRows();
    }

    // render list product_categories 
    public function list_products_categories()
    {
        $sql = "select * from product_categories";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}