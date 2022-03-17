<?php
session_start();
$id=$_GET['del'];
echo $id;
unset($_SESSION['add_product'][$id]);

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect.#modal-cart");
exit();
?>