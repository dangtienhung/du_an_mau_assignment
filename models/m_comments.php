<?php

include('database.php');

class m_comment extends database
{
    /* ============================================================= */
    /* ============================================================= */
    /* ============================================================= */
    /* ============================================================= */
    /* thêm bình luận vào db */
    public function m_insert_comment($id_customer, $id_product, $comment)
    {
        $sql = "insert into comments(id_customer, id_product, comment_desc)
                values(?, ?, ?);";
        $this->setQuery($sql);
        return $this->execute(array($id_customer, $id_product, $comment));
    }

    /* ============================================================= */
    /* ============================================================= */
    /* ============================================================= */
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
}