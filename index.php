<?php
require_once('controllers/Conn.php');
require_once('controllers/Queries.php');

include 'controllers/Router.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'views/home');
$router->get('/login', 'views/login');

//like that
//create your routes like this
$router->get('/register', 'views/register');
