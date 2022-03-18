<?php

namespace Pages\Admin;

use Pages\Admin\Page;
use Helpers\Session;
use Models\UserModel;

class Login extends Page {
    private $userModel;

    function __construct() {
        Session::start();
        $this->userModel = new UserModel();
    }

    public function index() {
        if(Session::isAdmin()) header('Location: ?type=admin');
        
        $this->hasHeader = false;
        $this->hasFooter = false;

        $this->load('views/admin/login.php');
    }

    public function login() {

        $username = isset($_POST['username']) && $_POST['username'] ? $_POST['username'] : null;
        $password = isset($_POST['password']) && $_POST['password'] ? $_POST['password'] : null;

        $result = $this->userModel->get($username, $password);

        if($result) {
            Session::set('is_admin', true);
            Session::set('user_id', $result['id']);
            Session::set('user_name', $result['username']);

            header('Location: ?type=admin');
        } else {
            header('Location: ?type=admin&page=login&s=0');
        }
    }

    public function logout() {
        Session::unset();
        Session::destroy();

        header('Location: ?type=admin');
    }

}