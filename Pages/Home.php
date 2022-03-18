<?php

namespace Pages;

use Pages\Page;
use Models\HomeModel;
use Models\AboutModel;
use Models\MainModel;

class Home extends Page {

    function __construct() {
        $this->model = new HomeModel();
        $this->model1 = new AboutModel();
        $this->model2 = new MainModel();
        Parent::__construct();
    }

    public function index() {
        $this->data['categories'] = $this->model->getHomeCategories();

        $this->data['news'] = $this->model->GET_ALL_MAIN();

        $this->data['about'] = $this->model1->GET();

        $this->data['main'] = $this->model2->GET();
        
        $this->load('views/frontend/home/index.php');
        
    }

}