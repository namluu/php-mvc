<?php
class Admin extends Controller
{
    public function index()
    {
        if (!(isset($_SESSION['admin_logged'])) || $_SESSION['admin_logged'] != true) {
            $this->redirect(ADMIN_URL.'/admin/login');
        }
        $this->view("layout_admin", [
            'content' => 'admin/index'
        ]);
    }

    public function login()
    {
        $message = '';
        if (isset($_POST['submit'])) {
            if ($_POST['username'] == 'nam.luu' && $_POST['password'] == 'admin123') {
                $_SESSION['admin_logged'] = true;
                $this->redirect(ADMIN_URL);
            }
            $message = 'Login failed. Please try again:';
        }
        $this->view("layout_guess", [
            'content' => 'admin/login',
            'message' => $message
        ]);
    }

    public function logout()
    {
        unset($_SESSION['admin_logged']);
        $this->redirect(ADMIN_URL.'/admin/login');
    }
}