<?php

namespace Pages;
use Pages\PageInterface;

class Page implements PageInterface{
    public $pageName;
    public $hasHeader = true;
    public $hasFooter = true;
    public $model;
    public $model1;
    public $model2;
    public $data = null;
    
    function __construct() {
        $this->pageName = isset($_GET['page']) && $_GET['page'] ? $_GET['page'] : 'home' ;
    }

    public function load($path) {
        $this->getHead();

        if($this->hasHeader) {
            $this->getHeader();
        }


        $data = $this->data;

        include($path);

        if($this->hasFooter) {
            $this->getFooter();
        }

        $this->getFoot();
    }

    public function getHead()
    {
        include('views/frontend/components/head.php');
    }

    public function getFoot()
    {
        include('views/frontend/components/foot.php');
    }

    public function getHeader()
    {
        $pageName = $this->pageName;   
        include('views/frontend/components/header.php');
    }

    public function getFooter()
    {
        include('views/frontend/components/footer.php');
    }
}