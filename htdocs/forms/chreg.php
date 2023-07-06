<?php
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  $surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
  $middlename = filter_var(trim($_POST['middlename']),FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
  if (empty($login)) {
    echo "Заполните поле логин!";
  }
  if (empty($name)) {
    echo "Заполните поле имя!";
  }
  if (empty($surname)) {
    echo "Заполните поле фамилия!";
  }
  if (empty($middlename)) {
    echo "Заполните поле отчество!";
  }
  if (empty($email)) {
    echo "Заполните поле почта!";
  }
  if (empty($pass)) {
    echo "Заполните поле пароль!";
  }


  else {

    $pass = md5($pass."lock987654321");

    $mysql = new mysqli('localhost','root','root','mybase');
    $mysql->query("INSERT INTO `users`(`login`, `name`, `middle name`, `surname`, `pass`, `email`) VALUES ('$login', '$name', '$middlename', '$surname', '$pass', '$email')");

      echo "Регистрация прошла успешно!";
      header("Location: success.html"); // перенаправляем пользователя на страницу подтверждения регистрации
      exit();
  }
  $mysql->close()
?>
