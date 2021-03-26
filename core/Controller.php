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
        if ($view == 'layout_vne') {
            $data['menuCategories'] = $this->model('CategoryModel')->getList();
        }
        extract($data);
        require_once "./mvc/views/".$view.".php";
    }

    public function redirect($url)
    {
        header('Location: ' . $url);
        exit();
    }
}