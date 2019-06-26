<?php
session_start();
require_once('../controllers/Conn.php');
require_once('../controllers/Queries.php');
require_once('../models/Links.php');


if (isset($_POST['submit'])) {
    $selectcourse = $_POST['selectcourse'];
    $action = new Links();
    $id = $_SESSION['user_id'];

    $checkifregistered = $action->showByUserId($id);


    if (!empty($checkifregistered)) {
        $_SESSION['error'] = "You have registered course already";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        foreach ($selectcourse as $check) {

            $register = $action->create($id, $check);
        }
        $_SESSION['success'] = "Courses registered Successfully";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
