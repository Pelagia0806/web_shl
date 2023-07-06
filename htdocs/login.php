<?php
  // подключение к базе данных и получение данных пользователя из базы
  $mysql = new mysqli('localhost', 'root', 'root', 'mybase');
  // получаем идентификатор пользователя из cookie
  $userId = $_COOKIE['user_id'];
  // выполняем запрос на получение данных пользователя
  $query = $mysql->query("SELECT * FROM `users` WHERE `id` = '$userId'");
  $result = mysqli_query($mysql, $query);
  $user = mysqli_fetch_assoc($result);
  if ($user) {
    // если пользователь найден, сохраняем данные в переменные
    $name = $user['name'];
    $surname = $user['surname'];
    $middlename = $user['middle name'];
    $email = $user['email'];
  }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Личный кабинет</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php require 'blocks/header.php'; ?>
    <div class="container mt-5">
      <div class="userinfo">
        <h2>Информация о пользователе</h2>
        <img src="path-to-avatar.jpg" class="avatar">
        <div class="info">
          <p><span class="label">E-mail:</span> <?php echo $email; ?></p>
          <p><span class="label">Имя:</span> <?php echo $name; ?></p>
          <p><span class="label">Фамилия:</span> <?php echo $surname; ?></p>
          <p><span class="label">Отчество:</span> <?php echo $middlename; ?></p>

        </div>
      </div>
    </div>

    <div style="margin-left: 80px; margin-bottom: 10px; margin-top: 30px;">
      <button type="button" class="btn btn-outline-primary btn-sm">Редактировать данные</button>
      <a class="btn btn-outline-danger btn-sm" onclick="window.location.href='index.php'">Выйти</a>
    </div>
  <?php require 'blocks/footer.php'; ?>
</body>
</html>
