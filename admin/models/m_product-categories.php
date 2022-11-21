<?php

include('database.php');

class m_product_category extends database
{
    // render list product_categories 
    public function list_products($search)
    {
        $sql = "select * from product_categories
                where name_product_categories like '%$search%'";
        $this->setQuery($sql);
        return $this->loadAllRows(array($search));
    }

    // render product category item
    public function product_category()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            echo '>> ' . $id;
            echo '</pre>';
        }
        $sql = "select * from product_categories where id = '$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    // insert
    public function insert($name_product_categories, $description)
    {
        $sql = "insert into product_categories(name_product_categories, description)
                values (?, ?)";
        $this->setQuery($sql);
        return $this->execute(array($name_product_categories, $description));
    }

    // edit
    public function edit_category($id, $name, $desc)
    {
        $sql = "update product_categories
                set
                name_product_categories = '$name',
                description = '$desc'
                where
                id = '$id'";
        $this->setQuery($sql);
        return $this->execute(array($name, $desc, $id));
    }

    // delete
    public function delete($id)
    {
        $sql = "delete from product_categories where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    // tìm kiếm 
    public function search_product_categories($search)
    {
        $sql = "select * from product_categories 
                where name_product_categories like '%$search%'";
        $this->setQuery($sql);
        return $this->loadAllRows(array($search));
    }
}