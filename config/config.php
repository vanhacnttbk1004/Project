<?php
session_start();
error_reporting(E_ALL || E_NOTICE || E_STRICT);
date_default_timezone_set('Etc/GMT-7');
if(version_compare(phpversion(),'5.1.0' ,'<')){
    die('PHP 5.1 Only!');
}

define('BASE_PATH',dirname(__FILE__));
define('DS',DIRECTORY_SEPARATOR);
define('PATH', 'http://localhost:83/demo3/');
define('DEFAULT_TEMPLATE','default');
define('DEFAULT_MODULE','Default');
define('DEFAULT_CONTROLLER','Index');
define('DEFAULT_ACTION','index');
define('DEFAULT_LANGUAGE','vi');
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_DATA','demo_3');
define('EXT','.php');