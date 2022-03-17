<?php
session_start();
// if (!$_SESSION['user']) {
//     header('Location: /');
// }

$id_user = $_SESSION['user']['id'];
?>


    <form>
        <div class="profile d-flex flex-column ms-4">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="authorization/handler_form/logout.php" class="logout">Выход</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <td></td>
                <td><b>Наименование</b></td>
                <td><b>Количество</b></td>
                <td><b>Цена за шт.</b></td>
                <td><b>Итого</b></td>
                <td><b></b></td>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql_m = $link->query("SELECT * FROM `products`");
            $Sum = 0;
            $sql_basket = $link->query("SELECT * FROM `basket`");

            if (isset($sql_basket)) {
                foreach ($sql_basket as $basket) {
                    if ($basket['id_user'] == $id_user) {
                        $a = $basket['id_product'];
                        $kol =  $basket['number_product'];
                        $good_m = [];
                        foreach ($sql_m as $product_m) {
                            if ($product_m['id'] == $a) {
                                $good_m = $product_m;
                                break;
                            }
                        } ?>

                        <tr>
                            <td><img width="50px" src="<?php echo $good_m['imgs']; ?>" /></td>
                            <td><?php echo $good_m['name']; ?></td>
                            <td> <?php echo $kol; ?> </td>
                            <td><?php echo $good_m['price'] . '$'; ?></td>
                            <td><?php echo $kol * $good_m['price'] . '$'; ?></td>
                            <!-- <td><b><a href="#">удалить</a></b></td> -->
                        </tr>

            <?php
                        $Sum += $kol * $good_m['price'];
                    }
                }
            }
            ?>
            <tr>
                <td align="right" colspan="5"><b> <?php echo 'Всего: ' . $Sum . '$'?></b></td>
            </tr>
            </tbody>
        </table>
    </form>
