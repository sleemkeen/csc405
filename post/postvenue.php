<?php
session_start();
require_once('../controllers/Conn.php');
require_once('../controllers/Queries.php');
require_once('../models/Venues.php');

if (isset($_POST['submit'])) {
    $venue = $_POST['ven'];

    $action = new Venues();

    $register = $action->create($venue);

    if ($register) {
        $_SESSION['success'] = "Venue successfully created.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = "Venue is not registered successfully.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
