<?php
require_once('controllers/Conn.php');
require_once('controllers/Queries.php');

$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

print_r($request_uri);

// Route it up!
switch ($request_uri[0]) {
        // Home page
    case '/school/':
        require 'views/home.php';
        break;
        // About page
    case '/about':
        require 'views/about.php';
        break;
        // Everything else
    default:
        header('HTTP/1.0 404 Not Found');
        require 'views/404.php';
        break;
}
