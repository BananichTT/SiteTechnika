<?php
session_start();
require_once '../../connect.php';

$login = $_POST['login'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['confirm_password'];

$check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `user_login` = '$login' ");

if (mysqli_num_rows($check_user) > 0) {
    $_SESSION['message'] = 'Такой логин уже используется';
    header('Location: ../../index.php?page=register');
} else {

    if ($password === $password_confirm) {
        $password = md5($password);

        mysqli_query($link, "INSERT INTO `users` (`id_user`, `user_name`, `user_email`, `user_login`, `user_password`, `role`) VALUES (NULL, '$name', '$email', '$login', '$password', `1`)");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../../index.php?page=login');
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../../index.php?page=register');
    }
}
?>