<?php
session_start();
require_once('../controllers/Conn.php');
require_once('../controllers/Queries.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $who = $_POST['who'];
    $name = $_POST['name'];

    $action = new Queries();

    $register = $action->insert([
        'name', 'email', 'password', 'role'
    ], [
        $name, $email, $password, $who
    ], 'users');
    if ($register) {

        $_SESSION['message'] = "User successfully created.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        $_SESSION['message'] = "User is not registered successfully.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
