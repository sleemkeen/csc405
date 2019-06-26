<?php
session_start();
require_once('../controllers/Conn.php');
require_once('../controllers/Queries.php');
require_once('../models/Config.php');

if (isset($_POST['submit'])) {
    $timeclose = $_POST['config'];
    $title = 'close';

    $action = new Config();

    $register = $action->create($title, $timeclose);


    if ($register) {
        $_SESSION['success'] = "Config successfully created.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = "Config is not registered successfully.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
