<?php

namespace Helpers;

class Session{

    public static function isAdmin() {

        if( !isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
            return false;
        }

        return true;
    }

    public static function start() {
        session_start();
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function unset() {
        session_unset();
    }

    public static function destroy() {
        session_destroy();
    }

}