<?php

include('database.php');

class m_home extends database
{
    // lấy ra số lượng sản phẩm có mã giảm giá
    public function list_products()
    {
        $sql = "select * from products where products.sale > 0";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // lấy ra các loại sản phẩm
    public function list_product_categories()
    {
        $sql = "select * from product_categories";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // lấy ra danh sách sản phẩm
    public function products()
    {
        $sql = "select * from products";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}