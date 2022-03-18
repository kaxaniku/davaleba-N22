<?php

namespace Pages\Admin;

use Pages\Admin\Page;

use Models\MainModel;

class Main extends Page{
    
    function __construct(){
        $this->model = new MainModel();
        Parent::__construct();
    }
    public function index() {
        $this->data['main']= $this->model->GET();
        
        $this->load('Views/admin/main/index.php');

    }
    public function update() {
        $imgName = '';
        if ($_FILES['image']['size']) {
            $imgName = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            $imgName = 'assets/uploaded_files/'. $imgName;

            move_uploaded_file($tmp, $imgName);
        }
        $title = $_POST['title'];
        $header = $_POST['header'];
        $text = $_POST['text'];

        $this->model->UPDATE($title, $header, $text,$imgName);

        header('Location: ?type=admin&page=main');
    }
}