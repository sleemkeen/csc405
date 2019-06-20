<?php

session_start();

require_once('controllers/Conn.php');
require_once('controllers/Queries.php');
require_once('controllers/Router.php');
require_once('controllers/Middleware.php');

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'views/home');
$router->get('/login', 'views/login');

//like that
//create your routes like this
$router->get('/register', 'views/register');
$router->get('/portal', 'views/portal');





//Register Middleware
$regmiddleware = new Middleware($request, [
    '/portal',
]);

print_r($regmiddleware->handle());
