<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Авторизация</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styler.css">
</head>
<body>
  <?php require 'blocks/header.php'; ?>
  <div class="container mt-4">
    <h1>Авторизация</h1>
    <form action="forms\au.php" method="post">
      <input type="email" class="form-control" name="email" id="Email" placeholder="Введите почту"><br>
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
      <button class="btn btn-success" type="submit">Войти</button>
    </form>
  </div>

	<?php require 'blocks/footer.php'; ?>
</body>
</html>
