<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Сайт</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
  <title>Контактная форма</title>
</head>
<body>
  <?php require 'blocks/header.php'; ?>
  <div class="container  mt-5">
    <h3>Контактная форма</h3>
    <form  action="forms/check.php" method="post">
      <input type="email" name="email" placeholder="Введите Email" class="form-control"> <br>
      <textarea name="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
      <button type="submit" name="send" class="btn btn-success" >Отправить</button>
    </form>

  </div>
  <?php require 'blocks/footer.php'; ?>
</body>
</html>
