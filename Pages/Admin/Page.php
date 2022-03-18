<?php

namespace Pages\Admin;

use Helpers\Session;
use Pages\PageInterface;

class Page implements PageInterface{
    public $pageName;
    public $hasHeader = true;
    public $hasFooter = false;
    public $model;
    public $model1;
    public $data = null;

    function __construct() {
        Session::start();
        if(!Session::isAdmin()) {
            header('location: ?type=admin&page=login');
        }
    }

    public function load($path) {
        
        $this->getHead();

        if($this->hasHeader) {
            $this->getHeader();
        }

        $data = $this->data;

        include($path);
    }

    public function getHead()
    {
        include('views/admin/components/head.php');
    }

    public function getFoot()
    {
        include('views/admin/components/foot.php');
    }

    public function getHeader()
    {
        include('views/admin/components/header.php');
    }

    public function getFooter()
    {
        include('views/admin/components/footer.php');
    }

}