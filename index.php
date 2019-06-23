<?php

session_start();

require_once('controllers/Conn.php');
require_once('controllers/Queries.php');
require_once('controllers/Router.php');
require_once('controllers/Middleware.php');
require_once('models/Users.php');

$request = $_SERVER['REQUEST_URI'];

$router = new Router($request);

$router->get('/', 'views/home');
$router->get('/login', 'views/login');

//like that
//create your routes like this
$router->get('/register', 'views/signup');
$router->get('/portal', 'views/portal');

$router->get('/adminlogin', 'views/admin/adminlogin');
$router->get('/admincourses', 'views/admin/admincourses');
$router->get('/adminhome', 'views/admin/adminhome');
$router->get('/adminuser', 'views/admin/adminuser');
$router->get('/adminvenue', 'views/admin/adminvenue');

//api




//Register Middleware
$regmiddleware = new Middleware($request, [
    '/portal',
]);



print_r($regmiddleware->handle());
