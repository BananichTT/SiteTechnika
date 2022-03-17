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
                <td><b>id</b></td>
                <td><b>Name</b></td>
                <td><b>Email</b></td>
                <td><b>Role</b></td>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql_users = $link->query("SELECT * FROM `users`");
            foreach ($sql_users as $user) : ?>
                <tr>
                    <td><?php echo $user['id_user']; ?></td>
                    <td><?php echo $user['user_name']; ?></td>
                    <td><?php echo $user['user_email']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</form>