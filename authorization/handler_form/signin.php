<?php
session_start();
require_once '../../connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);
$check_user = mysqli_query($link, "SELECT * FROM `users` WHERE `user_login` = '$login' AND `user_password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id_user'],
        "name" => $user['user_name'],
        "email" => $user['user_email'],
        "role"  => $user['role']
    ];
    if ($_SESSION['user']['role'] == 1){
        header('Location:  ../../index.php?page=success');
    } elseif ($_SESSION['user']['role'] == 2){
        header('Location: ../../index.php?page=admin');
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location:  ../../index.php?page=login');
    }
}
?>