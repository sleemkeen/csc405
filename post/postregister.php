<?php
session_start();
require_once('../controllers/Conn.php');
require_once('../controllers/Queries.php');
require_once('../controllers/Validate.php');


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $options = [
        'cost' => 12,
    ];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);

    $who = $_POST['who'];
    $name = $_POST['name'];


    $checkmail = new Validate($email);
    $mailcheck = $checkmail->validateEmail();

    if ($mailcheck) {
        $_SESSION['error'] = "User already exist";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {

        $action = new Queries();

        $register = $action->insert([
            'name', 'email', 'password', 'role'
        ], [
            $name, $email, $password, $who
        ], 'users');
        // echo $register;

        if ($register) {

            $_SESSION['success'] = "User successfully created.";
            header('Location: /login');
        } else {

            $_SESSION['error'] = "User is not registered successfully.";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}
