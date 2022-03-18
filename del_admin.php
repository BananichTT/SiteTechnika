<?php
session_start();

require('connect.php');
$id = $_POST['delit'];
mysqli_query($link, "DELETE FROM `products` WHERE `id` = '$id'");
$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();
?>