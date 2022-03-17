<?php 
session_start();
require_once 'connect.php';
$add_product =  $_SESSION['add_product'];
	$id_user = (int)$_SESSION['user']['id'];
  
if(isset($_SESSION['user'])){

	foreach($add_product as $key => $value){
			$id_product = $key;
			$number_product = (int)$value;

            mysqli_query($link, "INSERT INTO `basket` (`id`, `id_user`, `id_product`, `number_product`) VALUES (NULL, '$id_user', '$id_product', '$number_product')");
			}	       
        		header('Location: index.php?page=success');
    		}else {
        	$_SESSION['message'] = 'Для оформления заказа авторизуйтесь!';
			header("Location: index.php?page=login");
        	
        }
?>