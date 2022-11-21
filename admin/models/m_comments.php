<?php

include('database.php');

class m_comments extends database
{
    /* đếm số lượng các bình luận */
    public function count_comment()
    {
        $sql = "select count(*) from comments";
        $this->setQuery($sql);
        return $this->loadRecord();
    }

    /* lấy ra tất cả các bình luận */
    public function read_comments()
    {
        $sql = "select
                comments.*, cus.customers_name, products.name_product
                from comments
                join cus on comments.id_customer = cus.id_customer
                join products on comments.id_product = products.id_product";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    /* lấy ra 1 bình luận */
    public function read_one_comments()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        $sql = "select
                comments.*, cus.customers_name, products.name_product
                from comments
                join cus on comments.id_customer = cus.id_customer
                join products on comments.id_product = products.id_product
                where
                id_comment = '$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    /* xóa bình luận */
    public function delete_comment($id)
    {
        $sql = "delete from comments where id_comment = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    // edit`    
    public function edit_comment($id, $desc)
    {
        $sql = "update comments
                set
                comment_desc = '$desc'
                where
                id_comment = '$id'";
        $this->setQuery($sql);
        return $this->execute(array($id, $desc));
    }
}