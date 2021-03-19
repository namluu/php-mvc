<?php
class CategoryModel extends DBPDO
{
    public function getList()
    {
        $query = 'SELECT * FROM cms_category';
        return $this->getAll($query);
    }

    public function loadByAlias($alias)
    {
        $query = 'SELECT * FROM cms_category WHERE alias = :alias';
        $params = [':alias' => $alias];
        return $this->getRow($query, $params);
    }
}