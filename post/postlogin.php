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
            header('Location: home.php');
        } else {

            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            header('Location: admin.php');
        }
    } else {

        echo 'Incorrect email and password';
    }
}
