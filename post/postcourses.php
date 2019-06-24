<?php
session_start();
require_once('../controllers/Conn.php');
require_once('../controllers/Queries.php');
require_once('../models/Classes.php');


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $code = $_POST['code'];
    $date = $_POST['date'];
    $max = $_POST['max'];
    $ven = $_POST['ven'];

    $action = new Classes();

    $register = $action->create($date, 1, $max, 2, $code, $title);
    if ($register) {
        $_SESSION['success'] = "Courses successfully created.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['error'] = "Courses is not registered successfully.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
