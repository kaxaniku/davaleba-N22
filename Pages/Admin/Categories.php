<?php

namespace Pages\Admin;

use Pages\Admin\Page;
use Models\CategoryModel;

class Categories extends Page{
    function __construct(){
        $this->model = new CategoryModel();
        Parent::__construct();
    }
    public function index() {
        $this->data['categories'] = $this->model->GET_ALL();
        $this->load('views/admin/categories/index.php');

    }

    public function add() {
        
        $this->load('views/admin/categories/add.php');
        
    }

    public function edit() {
        $id = $_GET['id'];

        $this->data['category'] = $this->model->GET_SINGLE($id);
        
        $this->load('views/admin/categories/edit.php');

    }
    public function update() {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $home = $_POST['home'];

        $this->model->UPDATE($id, $title, $home);

        header('Location: ?type=admin&page=categories');
    }

    public function insert() {
        $title = $_POST['title'];
        $home = $_POST['home'];

        $this->model->INSERT($title, $home);

        header('Location: ?type=admin&page=categories');
    }

    public function erasure() {
        $id = $_POST['id'];

        $this->model->ERASURE($id);

        header('Location: ?type=admin&page=categories');
    }

}