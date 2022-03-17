<?php
session_start();
// if (!$_SESSION['user']) {
//     header('Location: /');
// }

$id_user = $_SESSION['user']['id'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
</head>
<body>

    <!-- Профиль -->
  
    <form>
     
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
         <table>
                <tr>
                    <td></td>
                    <td><b>Наименование</b></td>
                    <td><b>Количество</b></td>
                    <td><b>Цена за шт.</b></td>
                    <td><b>Итого</b></td>
                    <td><b></b></td>
                </tr>

<?php
        $sql_m= $link->query("SELECT * FROM `products`");
        $Sum = 0;
        $sql_basket= $link->query("SELECT * FROM `basket`");
        
        //проверяем, что корзина не пуста иначе будет выходить ошибка
        if(isset($sql_basket)){
        //пербераем массив с добавленными товарами и выбираем id товара
       foreach($sql_basket as $basket ){
            if($basket['id_user'] == $id_user){
            $a = $basket['id_product'];
            $kol =  $basket['number_product']; 
            $good_m = [];
            foreach ($sql_m as $product_m) {
                if($product_m['id'] == $a){
                $good_m= $product_m;
                break;  
                }   
            }?> 

                <tr>
                    <td><img width="50px" src="<?php echo $good_m['imgs']; ?>" /></td>
                    <td><?php echo $good_m['name']; ?></td>
                    <td> <?php echo $kol; ?> </td>
                    <td><?php echo $good_m['price'].'р'; ?></td>
                    <td><?php echo $kol*$good_m['price'].'р'; ?></td>
                    <td><b><a href="#">удалить</a></b></td>
                                    </tr>
           
        <?php
        $Sum +=$kol*$good_m['price'];
        }   
        }        
        }
        ?>
        <tr>
             <td align="right" colspan="5"><b> <?php echo 'Всего: '.$Sum ?></b></td>
         </tr> 
        </table>





        <a href="authorization/handler_form/logout.php" class="logout">Выход</a>
    </form>

</body>
</html> 