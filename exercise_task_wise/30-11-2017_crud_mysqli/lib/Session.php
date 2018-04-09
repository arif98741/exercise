<?php

class Session {

    public static function initialization() {
       
        session_start();
           
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    public static function checkLogin() {
        $login = self::get(['login']);
        if ($login) {
            header("Location: index.php");
        }
    }

}
