<?php

namespace Pages;


class Contact extends Page{
    
    public function index() {
        
        $this->load('views/frontend/contact/index.php');

    }

}