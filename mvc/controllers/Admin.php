<?php
class Admin extends Controller
{
    public function index()
    {
        if (!(isset ($_SESSION['admin_logged'])) || $_SESSION['admin_logged'] != true) {
            $this->redirect(ADMIN_URL.'/login');
        }
        $this->view("layout_admin", [
            'content' => 'admin/index'
        ]);
    }

    public function login()
    {
        $this->view("layout_guess", [
            'content' => 'admin/login'
        ]);
    }
}