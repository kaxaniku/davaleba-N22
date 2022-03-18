<?php

namespace Pages\Admin;

use Pages\Admin\Page;

use Models\AboutModel;

class About extends Page{
    
    function __construct(){
        $this->model = new AboutModel();
        Parent::__construct();
    }
    public function index() {
        $this->data['about']= $this->model->GET();
        
        $this->load('views/admin/about/index.php');

    }
    public function update() {
        $H_title = $_POST['H_title'];
        $Abt_title = $_POST['Abt_title'];
        $H_text = $_POST['H_text'];
        $Abt_text = $_POST['Abt_text'];

        $this->model->UPDATE($H_title, $Abt_title, $H_text, $Abt_text);

        header('Location: ?type=admin&page=about');
    }
}