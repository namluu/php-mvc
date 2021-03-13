<?php

class ErrorHandler extends Controller
{
    public function show404()
    {
        $this->view("layout_vne", [
            'content' => 'error/404'
        ]);
    }
}