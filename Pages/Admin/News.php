<?php

namespace Pages\Admin;

use Pages\Admin\Page;
use Models\NewsModel;
use Models\CategoriesModel;

class News extends Page{
    function __construct(){
        $this->model = new NewsModel();
        $this->model1 = new CategoriesModel();
        Parent::__construct();
    }
    public function index() {
        $this->data['news'] = $this->model->GET_ALL();
        $this->data['categories'] = $this->model1->getCategories();
        $this->load('views/admin/news/index.php');

    }

    public function add() {
        $this->data['categories'] = $this->model1->getCategories();
        
        $this->load('views/admin/news/add.php');
        
    }

    public function edit() {
        $id = $_GET['id'];

        $this->data['news'] = $this->model->GET_SINGLE($id);

        $this->data['categories'] = $this->model1->getCategories();
        
        $this->load('views/admin/news/edit.php');

    }
    public function update() {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $short_text = $_POST['short_text'];
        $text = $_POST['text'];

        $imgName = '';
        if ($_FILES['image']['size']) {
            $imgName = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            $imgName = 'assets/uploaded_files/news/'. $imgName;

            move_uploaded_file($tmp, $imgName);
        }

        $this->model->UPDATE($id, $title, $category,$short_text,$text,$imgName);

        header('Location: ?type=admin&page=news');
    }

    public function insert() {
        $imgName = '';
        if ($_FILES['image']['size']) {
            $imgName = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            $imgName = 'assets/uploaded_files/news/'. $imgName;

            move_uploaded_file($tmp, $imgName);
        }
        $title = $_POST['title'];
        $category = $_POST['category'];
        $short_text = $_POST['short_text'];
        $text = $_POST['text'];

        $this->model->INSERT($title, $category,$short_text,$text,$imgName);

        header('Location: ?type=admin&page=news');
    }

    public function erasure() {
        $id = $_POST['id'];

        $this->model->ERASURE($id);

        header('Location: ?type=admin&page=news');
    }

}