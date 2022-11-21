<?php

include('database.php');

class m_home extends database
{
    // đếm số lượng sản phẩm
    public function count_products()
    {
        $sql = "select count(*) from products";
        $this->setQuery($sql);
        return $this->loadRecord();
    }

    // đếm số lượng người dùng
    public function count_customers()
    {
        $sql = "select count(*) from cus";
        $this->setQuery($sql);
        return $this->loadRecord();
    }

    // đếm số lượng bình luận của khách hàng
    public function count_comments()
    {
        $sql = "select count(*) from comments";
        $this->setQuery($sql);
        return $this->loadRecord();
    }

    // đếm số lượng loại sản phẩm
    public function count_product_categories()
    {
        $sql = "select count(*) from product_categories";
        $this->setQuery($sql);
        return $this->loadRecord();
    }
}