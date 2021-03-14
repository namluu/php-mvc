<?php

class News extends Controller
{
    public function category($alias)
    {
        $category = $this->model('CategoryModel')->loadByAlias($alias);
        $this->view("layout_vne", [
            'content' => 'news/list',
            'category' => $category
        ]);
    }

    public function show($alias)
    {
        $this->view("layout_vne", [
            'content' => 'news/show'
        ]);
    }
}