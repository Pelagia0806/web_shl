<?php
// получаем данные из формы
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

// проверяем, что поля заполнены
if (empty($email) || empty($pass)) {
  echo "Заполните все поля!";
  exit();
}

// хешируем пароль
$pass = md5($pass . "lock987654321");

// подключаемся к базе данных
$mysqli = new mysqli('localhost', 'root', 'root', 'mybase');

// проверяем, удалось ли установить соединение
if ($mysqli->connect_error) {
  die('Ошибка подключения (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// формируем запрос на поиск пользователя
$query = "SELECT * FROM `users` WHERE `email` = '{$email}' AND `pass` = '{$pass}'";

// выполняем запрос
$result = $mysqli->query($query);

// проверяем, нашли ли пользователя
if ($result->num_rows > 0) {
  $user = $result->fetch_assoc();
  // устанавливаем cookie с id пользователя
  setcookie('user_id', $user['id'], time() + 3600, '/');
  // перенаправляем пользователя на его личную страницу
  header('Location: forms/success1.html');
  exit();
} else {
  // если пользователь не найден, выводим сообщение об ошибке
  echo "Неверный email или пароль!";
  exit();
}

// закрываем соединение с базой данных
$mysqli->close();

?>
