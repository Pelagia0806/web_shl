<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Сайт</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php require 'blocks/header.php'; ?>

	<div class="container mt-5">
		<h3 class="mb-5">Статьи</h3>
			<div class="d-flex flex-wrap">
				<?php
					for($i = 0; $i<3; $i++):
				?>
						 <div class="card mb-4 rounded-3 shadow-sm">
							 <div class="card-header py-3">
								 <h4 class="my-0 fw-normal">текст</h4>
							 </div>
							 <div class="card-body">
								 <img src="img/<?php echo ($i+1)?>.jpg" class="img-thumbnail">
								 <ul class="list-unstyled mt-3 mb-4">
									 <li>в том числе 10 пользователей</li>
									 <li>2 ГБ памяти</li>
									 <li>Поддержка по электронной почте</li>
									 <li>Доступ к справочному центру</li>
								 </ul>
								 <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
							 </div>
						 	</div>
				 <?php endfor;  ?>
			</div>
	</div>
	<?php require 'blocks/footer.php'; ?>
</body>
</html>
