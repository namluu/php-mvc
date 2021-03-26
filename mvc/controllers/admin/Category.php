<?php
class Category extends Controller
{
    public function index()
    {
        $categories = $this->model('CategoryModel')->getList();
        $this->view("layout_admin", [
            'content' => 'admin/category/index',
            'categories' => $categories
        ]);
    }

    public function edit($id)
    {
        $category = $this->model('CategoryModel')->loadByid($id);
        $message = '';
        if (isset($_POST['submit'])) {
            if ($_POST['name'] && $_POST['alias']) {
                $data = [
                    'name' => $_POST['name'],
                    'alias' => $_POST['alias'],
                ];
                $this->model('CategoryModel')->update($data);
                $this->redirect(ADMIN_URL.'/category');
            }
            $message = 'Submit failed. Please try again:';
        }
        $this->view("layout_admin", [
            'content' => 'admin/category/edit',
            'category' => $category,
            'message' => $message
        ]);
    }
}