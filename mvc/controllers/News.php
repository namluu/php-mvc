<?php

class News extends Controller
{
    public function show($alias)
    {
        $this->view("layout_vne", [
            'content' => 'news/show'
        ]);
    }
}