<?php
namespace Core;

class Cookie {

    public static function exists($name) {
        #return (isset($_COOKIE[$name])) ? true : false;
        $_cookie = filter_input(INPUT_COOKIE, $name);
        return (isset($_cookie)) ? true : false;
    }

    public static function set($name, $value, $expiry) {
        if (setcookie($name, $value, time() + $expiry, '/')) {
            return TRUE;
        }
        return FALSE;
    }

    public static function delete($name) {
        self::set($name, '', time() - 1);
    }

    public static function get($name) {
        #return $_COOKIE[$name];
        $_cookie = filter_input(INPUT_COOKIE, $name);
        return $_cookie;
    }

}
