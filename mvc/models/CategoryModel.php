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

    public function loadById($id)
    {
        $query = 'SELECT * FROM cms_category WHERE id = :id';
        $params = [':id' => $id];
        return $this->getRow($query, $params);
    }

    public function update($id, $data)
    {
        $query = "UPDATE cms_category
				SET name = :name, alias = :alias
				WHERE id = :id";
        $params = [
            ':id' => $id,
            ':name' => $data['name'],
            ':alias' => $data['alias']
        ];
        $this->executeQuery($query, $params);
    }

    public function add($data)
    {
        $query = "INSERT INTO cms_category (name, alias)
				VALUES (:name, :alias)";
        $params = [
            ':name' => $data['name'],
            ':alias' => $data['alias']
        ];
        $this->executeQuery($query, $params);
    }

    public function delete($id)
    {
        $category = $this->loadById($id);
        if ($category && $category->id) {
            $query = "DELETE FROM cms_category WHERE id = :id";
            $params = [':id' => $id];
            $this->executeQuery($query, $params);
        }
    }
}