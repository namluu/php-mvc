<?php
class CategoryModel extends DB
{
    public function getList()
    {
        $qr = 'SELECT * FROM cms_category';
        return mysqli_query($this->con, $qr);
    }
}