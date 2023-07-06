<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Получаем данные из формы
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Проверяем данные на наличие ошибок
  $errors = array();

  if (empty($email)) {
    $errors[] = "Введите email";
  }
  if (empty($message)) {
    $errors[] = "Введите сообщение";
  }

  // Если нет ошибок, отправляем сообщение
  if (empty($errors)) {
    // Отправляем сообщение
    mail("polina.yeshtokina@mail.ru", "Новое сообщение от $name", $message, "From: $email");

    // Перенаправляем на страницу "thankyou.php"
    header("Location: thankyou.php");
    exit;
  }
}
?>
