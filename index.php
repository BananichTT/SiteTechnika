<?php
session_start();
require('templates/header.php');
?>

<?php
require('connect.php');

if(!isset($_SESSION['sql'])){
    $_SESSION['sql'] = "SELECT * from `products`";
}
$sql_text = $_SESSION['sql'];

$sql= $link->query($sql_text);

$page = $_GET['page'];
if (!isset($page)) {
    require('templates/main.php');
}elseif ($page == 'index') {
    require('templates/main.php');
}elseif($page == 'catalog'){
    require('templates/catalog.php'); 
}elseif($page == 'tovarCart'){
    $idg = $_GET['id'];
    $good = [];
    foreach($sql as $product){
        if($product['id'] == $idg){
            $good = $product;
            break;
        }
    }
    require('templates/tovarCart.php');
}
?>


<?php
require('templates/footer.php');
?>