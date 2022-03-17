<?php
session_start();

// if ($_SESSION['user']) {
//   header('Location: index.php?page=success');
// }
?>

<body class="login_body">
  <form class="mb-4 mt-4 ms-4" action="authorization/handler_form/signin.php" method="post">
<div class=" col-lg-3 mb-3">
    <label class="form-label">Логин</label>
    <input type="text" class="form-control" name="login">
    </div>
    <div class="col-lg-3 mb-3">
      <label class="form-label">Пароль</label>
      <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary col-lg-3">Войти</button>
    <p>У вас нет аккаунта? - <a href="index.php?page=register">зарегистрируйтесь</a>!</p>
    <?php
    if ($_SESSION['message']) {
      echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
  </form>
</body>