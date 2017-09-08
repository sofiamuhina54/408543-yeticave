  <nav class="nav">
    <ul class="nav__list container">
      <li class="nav__item">
        <a href="all-lots.html">Доски и лыжи</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Крепления</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Ботинки</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Одежда</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Инструменты</a>
      </li>
      <li class="nav__item">
        <a href="all-lots.html">Разное</a>
      </li>
    </ul>
  </nav>
  <form class="form container" action="../login_user.php" method="post"> <!-- form--invalid -->
    <h2>Вход</h2>
    <div class="form__item <?php print(check_error($errors, 'email')); ?>"> <!-- form__item--invalid -->
      <label for="email">E-mail*</label>
      <input id="email" type="text" name="email" placeholder="Введите e-mail">
      <span class="form__error">Введите e-mail</span>
    </div>
    <div class="form__item form__item--last <?php print(check_error($errors, 'password')); if ($verify_user == false) print(' form__item--invalid'); ?>">
      <label for="password">Пароль*</label>
      <input id="password" type="text" name="password" <?php if ($verify_user == false) print('value="Вы ввели неверный пароль"'); ?> placeholder="Введите пароль">
      <span class="form__error">Введите пароль</span>
    </div>
    <button type="submit" class="button">Войти</button>
  </form>