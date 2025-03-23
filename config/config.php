<?php
const APP_NAME = "SOA";
const APP_SESSION_NAME = "SOA";
date_default_timezone_set('America/Mexico_City');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

define('IS_LOCAL', in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1']) ? true : false);
define('URL', IS_LOCAL ? 'http://soa.com/' : 'REMOTE URL');

define('DB_HOST', IS_LOCAL ? 'localhost' : 'REMOTE HOST');
define('DB_USER', IS_LOCAL ? 'root' : 'REMOTE USER');
define('DB_PASS', IS_LOCAL ? '' : 'REMOTE PASSWORD');
define('DB_NAME', IS_LOCAL ? 'soa' : 'REMOTE DBNAME');

define('CLASSES', ROOT . 'app/classes' . DS);
define('CONTROLLERS', ROOT . 'app/controllers' . DS);

define('CLASSES_PATH', ROOT . 'app/..' . DS);

define('VIEWS', ROOT . 'app/views/' . DS);
define('USER_VIEWS', VIEWS . 'user' . DS);

define('CSS', URL . 'css/');
define('JS', URL . 'js' . DS);

define('RESOURCES', URL . 'resources' . '/');
define('ASSETS', RESOURCES . 'assets' . '/');
define('IMG', ASSETS . 'img' . '/');
define('LOGO', IMG . 'logo' . '/');


define('FUNCTIONS', __DIR__ . '/functions' . DS);
define('TEMPLATES', VIEWS . 'templates' . DS);
define('LAYOUTS', TEMPLATES . 'layouts' . DS);
define('LAYOUTS_US', LAYOUTS . 'user' . DS);
