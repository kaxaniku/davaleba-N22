<?php

namespace Pages;

use Models\CategoriesModel;
class Categories extends Page{
    function __construct(){
        $this->model = new CategoriesModel();
        Parent::__construct();
    }
    public function index() {
        $this->data['categories']= $this->model->getCategories();
        
        $this->load('views/frontend/categories/index.php');

    }

}