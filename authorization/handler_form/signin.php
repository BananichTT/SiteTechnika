<?php
session_start();
require_once '../../connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);
$check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `user_login` = '$login' AND `user_password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id_user" => $user['id'],
        "user_name" => $user['name'],
        "user_email" => $user['email']
    ];
    header('Location:  ../../index.php?page=success');
} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location:  ../../index.php?page=login');
}
