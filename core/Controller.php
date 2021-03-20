<?php
class Controller
{
    public function model($model)
    {
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[])
    {
        $categories = $this->model('CategoryModel')->getList();
        $data['menuCategories'] = $categories;
        extract($data);
        require_once "./mvc/views/".$view.".php";
    }

}