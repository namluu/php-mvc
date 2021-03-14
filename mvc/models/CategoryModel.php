<?php
class CategoryModel extends DB
{
    public function getList()
    {
        $query = 'SELECT * FROM cms_category';
        return mysqli_query($this->connection, $query);
    }

    public function loadByAlias($alias)
    {
        $query = 'SELECT * FROM cms_category WHERE alias = "'.$alias.'"';
        $result = mysqli_query($this->connection, $query);
        return $result->fetch_assoc();
    }
}