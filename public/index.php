<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
    return false;
}

// Setup autoloading
require '../init.php';

// Run the application!
Zend\Mvc\Application::init(require '../config/application.config.php')->run();
