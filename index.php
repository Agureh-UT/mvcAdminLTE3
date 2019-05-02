<?php
use Core\Cookie;
use Core\Router;
use Core\Session;
use App\Models\Users;


define('DS', DIRECTORY_SEPARATOR); // -> /
define('ROOT', dirname(__FILE__)); // -> /var/www/html/mvc
//
// load configuration and helper functions
require_once(ROOT . DS . 'config' . DS . 'config.php');

// Autoload classes
function autoload($className) {
  $classAry = explode('\\', $className);
  $class = array_pop($classAry);
  $subPath = strtolower(implode(DS, $classAry));
  $path = ROOT . DS . $subPath . DS . $class . '.php';
  if(file_exists($path)) {
    require_once($path);
  }
}

spl_autoload_register('autoload');
session_start();

$path = filter_input(INPUT_SERVER, 'PATH_INFO');
$url = isset($path) ? explode('/', ltrim($path, '/')) : [];

if (!Session::exists(CURRENT_USER_SESSION_NAME) && Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
    Users::loginUserFromCookie();
}

Router::route($url);
