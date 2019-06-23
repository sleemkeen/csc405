<?php
session_start();
require_once('../controllers/Conn.php');
require_once('../controllers/Auth.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $who = $_POST['who'];

    $getauth = new Auth($email, $password);
    $nowlogin = $getauth->authlogin();

    if ($nowlogin) {

        if ($who == 'user') {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            header('Location: /portal');
        } else {

            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            header('Location: /adminhome');
        }
    } else {

            $_SESSION['error'] = "Incorrect email and password";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
