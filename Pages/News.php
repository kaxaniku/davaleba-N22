<?php

namespace Pages;

use Models\NewsModel;
use Models\CategoriesModel;


class News extends Page{

    function __construct() {
        $this->model = new NewsModel();
        $this->model1 = new CategoriesModel();
        Parent::__construct();
    }
    
    public function index() {
        $CATID = isset($_GET["CategoryId"]) && $_GET["CategoryId"]? $_GET["CategoryId"] : null;

        $word = isset($_GET["word"]) && $_GET["word"]? $_GET["word"] : null;

        $this->data['news'] = $this->model->GET_ALL_FILTERED($CATID,$word);

        $this->data['categories'] = $this->model1->getCategories();

        $this->data['word'] = $word;

        $this->data['CategoryId'] = $CATID;

        
        $this->load('views/frontend/news/index.php');

    }
    public function view() {
        $id = $_GET['id'];

        $this->data['news'] = $this->model->GET_SINGLE($id);
        
        $this->load('views/frontend/news/view.php');

    }
}