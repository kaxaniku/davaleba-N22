<?php

namespace Pages\Admin;

use Pages\Admin\Page;

class Home extends Page {

    public function index() {

        $this->load('views/admin/home/index.php');
    }

}