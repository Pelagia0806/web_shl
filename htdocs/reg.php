<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Форма регистрации</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styler.css">
</head>
<body>
  <?php require 'blocks/header.php'; ?>
  <div class="container mt-4">
    <h1>Форма регистрации</h1>
    <form action="forms/chreg.php" method="post">
      <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
      <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
      <input type="text" class="form-control" name="surname" id="surname" placeholder="Введите фамилию"><br>
      <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Введите отчество"><br>
      <input type="email" class="form-control" name="email" id="Email" placeholder="Введите почту"><br>
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
      <button class="btn btn-success" type="submit">Зарегистрировать</button>
    </form>
  </div>

    <?php require 'blocks/footer.php'; ?>
</body>
</html>
