<!DOCTYPE html>
<html>
<head>
  <title>Спасибо!</title>
  <style>
    body {
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
      font-size: 16px;
      color: #333;
    }

    h1 {
      font-size: 36px;
      text-align: center;
      margin-top: 50px;
    }

    p {
      text-align: center;
      font-size: 24px;
      margin-top: 20px;
      margin-bottom: 50px;
    }

    button {
      display: block;
      margin: 0 auto;
      padding: 10px 20px;
      font-size: 18px;
      border-radius: 5px;
      background-color: #4CAF50;
      color: white;
      border: none;
    }

    button:hover {
        background-color: #3e8e41;
        cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Спасибо за ваше сообщение!</h1>
  <p>Мы ответим на него в ближайшее время.</p>
  <button onclick="goBack()">Вернуться</button>

  <script>
  function goBack() {
    location.href = "htdocs/about.php";
  }
  </script>

</body>
</html>
