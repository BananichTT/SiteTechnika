<?php
session_start();

$id_add = $_POST['product_id'];
$kol_add = $_POST['quantity'];

if (!isset($_SESSION['add_product'][$id_add])) {
    $_SESSION['add_product'][$id_add] = $kol_add;

}else{
    $_SESSION['add_product'][$id_add] += $kol_add;
}

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();

?>
