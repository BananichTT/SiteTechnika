<?php
$host = 'localhost';
$user = 'avmigacr';
$password = 'GYvEUt';
$db_name = 'avmigacr_m3';

$link = mysqli_connect($host,$user,$password,$db_name);

if ($link->maxdb_connect_errno) exit('шибка соединения с БД');

$link->set_charset('utf8');
?>