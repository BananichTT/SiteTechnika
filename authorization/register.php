<?php
session_start();
if ($_SESSION['user']) {
  header('Location: ../../index.php?page=profile');
}
?>
<div class="registration">
  <link rel="stylesheet" href="css/style.css">
  <form class="mb-4 mt-4 ms-4" action="authorization/handler_form/signup.php" method="post" enctype="multipart/form-data">
    <div class="col-lg-3 mb-3">
      <label class="form-label">Имя</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="col-lg-3 mb-3">
      <label class="form-label">Логин</label>
      <input type="text" class="form-control" name="login">
    </div>
    <div class="col-lg-3 mb-3">
      <label class="form-label">Почта</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="col-lg-3 mb-3">
      <label class="form-label">Пароль</label>
      <input type="password" class="form-control" name="password" pattern="^\S{6,16}$" 
      onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Должно быть не менее 6 и не более 16 символов' : ''); 
      if(this.checkValidity()) form.password_two.pattern = this.value;" required>
    </div>
    <div class="col-lg-3 mb-3">
      <label class="form-label">Подтвердите пароль</label>
      <input type="password" class="form-control" name="confirm_password" pattern="^\S{6,16}$" 
      onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Пожалуйста, введите тот же пароль, что и выше' : '');" required>
    </div>
    <button type="submit" class="btn btn-primary col-lg-3">Зарегистрироваться</button>
    <p>У вас уже есть аккаунт? - <a href="index.php?page=login">авторизируйтесь</a>!</p>
    <?php
    if ($_SESSION['message']) {
      echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
  </form>
</div>