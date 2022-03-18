<?php

namespace Pages;

use Models\AboutModel;

class About extends Page{
    
    function __construct(){
        $this->model = new AboutModel();
        Parent::__construct();
    }
    public function index() {
        $this->data['about']= $this->model->GET();
        
        $this->load('views/frontend/about/index.php');

    }
}