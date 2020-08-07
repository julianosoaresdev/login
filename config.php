<?php
session_start();
error_reporting(E_ERROR ^ E_NOTICE);
//error_reporting(E_ALL);
ini_set('error_log', $_SERVER["DOCUMENT_ROOT"].'/log/php_errors.log');
ini_set('ignore_repeated_source', true);
ini_set('ignore_repeated_errors', true);
ini_set('display_errors', true);
ini_set('log_errors', true);
require __DIR__.'/vendor/autoload.php';
define("SYS_ENVIRONMENT", "dev");
//define("ENVIRONMENT", "no_ar");
define("SYS_BASE", "http://localhost");
define("SYS_TITULO", "Login");
?>