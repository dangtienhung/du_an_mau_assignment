<?php

require_once 'database.php';

class m_products extends database
{
    // lấy ra tất cả các danh sách sản phẩm
    public function read_product_list($search, $number_in_on_page, $clear)
    {
        $sql = "select
                products.*, 
                product_categories.name_product_categories as category_name,
                product_categories.id as id
                from products
                join product_categories on products.id_product_category = product_categories.id 
                where name_product like '%$search%'
                limit $number_in_on_page
                offset $clear";
        $this->setQuery($sql);
        return $this->loadAllRows(array($search, $number_in_on_page, $clear));
    }

    // đếm số lượng sản phẩm với từ khóa tìm kiếm
    public function get_count_search($search)
    {
        $sql = "select count(*) from products where name_product like '%$search%'";
        $this->setQuery($sql);
        return $this->loadRecord(array($search));
    }

    // lấy ra tất cả các loại sản phẩm
    public function read_product_category()
    {
        $sql = "select * from product_categories";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // thêm mới sản phẩm
    public function m_create_product($name_product, $price, $sale, $image, $description, $name_product_categories)
    {
        $sql = "insert into products(name_product, price, sale, image, description, id_product_category)
                values (?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute(array($name_product, $price, $sale, $image, $description, $name_product_categories));
    }

    // xóa sản phẩm
    public function m_delete_product($id_product)
    {
        $sql = "delete from products where id_product = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_product));
    }

    // chỉnh sửa sản phẩm
    public function m_edit_product($id_product, $name_product, $price, $sale, $image, $description, $name_product_categories)
    {
        $sql = "update products
                set
                name_product = '$name_product',
                price = '$price',
                sale = '$sale',
                image = '$image',
                description = '$description',
                id_product_category = '$name_product_categories'
                where
                id_product = '$id_product';
        ";
        $this->setQuery($sql);
        return $this->execute(array($name_product, $price, $sale, $image, $description, $name_product_categories, $id_product));
    }

    // lấy ra sản phẩm theo id
    public function m_read_one_row()
    {
        $id_product = $_GET['id'];
        $sql = "select * from products where id_product = '$id_product'";
        $this->setQuery($sql);
        return $this->loadRow();
    }
}