<?php

require_once('database.php');

class m_detail extends Database
{
    public function read_detail()
    {
        $id = $_GET['id'];
        // echo '>>> id: ' . $id;
        $sql = "select 
                products.*, product_categories.name_product_categories
                from products 
                join product_categories on products.id_product_category = product_categories.id
                where id_product = '$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    // lấy ra tất cả sản phẩm liên quan
    public function get_product_categories($id)
    {
        $sql = "select * from products
                join product_categories on products.id_product_category = product_categories.id
                where product_categories.id = '$id';";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    /* ============================================================= */
    /* lấy ra tất cả bình luận */
    public function read_comments($id)
    {
        $sql = "select 
                comments.*, cus.customers_name
                from comments
                join products on comments.id_product = products.id_product
                join cus on comments.id_customer = cus.id_customer
                where products.id_product = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    /* ============================================================= */
    /* đếm tất cả bình luận */
    public function count_comments($id)
    {
        $sql = "select count(*) from comments
                where comments.id_product = ?";
        $this->setQuery($sql);
        return $this->loadRecord(array($id));
    }

    /* ============================================================= */
    /* xóa bình luận */
    public function delete_comment($id)
    {
        $sql = "delete from comments
                where id_comment = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    /* ============================================================= */
    /* sửa bình luận */
    public function edit_comment($id, $description)
    {
        $sql = "update comments
                set
                comment_desc = '$description'
                where
                id_comment = '$id'";
        $this->setQuery($sql);
        return $this->execute(array($id, $description));
    }

    /* ============================================================= */
    /* lấy ra tất cả bình luận trừ bình luận đang sửa */
    public function get_all_cmt_not_id($id_comment, $id_product)
    {
        $sql = "select * from comments 
                where id_comment != '$id_comment' and id_product = '$id_product'";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_comment, $id_product));
    }

    /* ============================================================= */
    /* thêm bình luận */
    public function inser_comment($id_customer, $id_product, $comment)
    {
        $sql = "insert into comments(id_customer, id_product, comment_desc)
        values(?, ?, ?);";
        $this->setQuery($sql);
        return $this->execute(array($id_customer, $id_product, $comment));
    }
}