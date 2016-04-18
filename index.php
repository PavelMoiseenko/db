<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Работа с БД</title>

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<ul class="nav nav-pills nav-stacked">
				  <li class="active"><a href="#">Главная</a></li>
				  <li><a href="add.php">Добавить товар в БД</a></li>
				</ul>

				<h3>Выберите категорию</h3>
				<p class="navbar-text">
					<a href="index.php?category=Ноутбуки" class="navbar-link">Ноутбуки</a>
					<a href="index.php?category=Камеры" class="navbar-link">Камеры</a>
					<a href="index.php?category=Телефоны" class="navbar-link">Телефоны</a>
				</p>

			</div>
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<?php
	
					if(isset($_GET['category'])){
						$category = $_GET['category'];
						$conn = mysqli_connect("localhost", "root", "1", "slabel");
						mysqli_set_charset($conn, "utf8");
						$res = mysqli_query($conn, "SELECT * FROM products WHERE category='$category'");
						echo "<table class='table table-hover'>
								<thead>
									<tr>
										<th>Наименование</th><th>Описание товара</th><th>Цена, в долл США</th>
									</tr>
									
								</thead>
								<tbody>";

						while($line = mysqli_fetch_assoc($res)){
							echo "<tr>
									<td>$line[title]</td><td>$line[description]</td><td>$line[price]</td>
								</tr>";
						}
						echo "</tbody></table>";

					
					}
					else{
						echo "<h1>В этом окне будут отображаться товары соответствующие категории которую вы выберете</h1>";
					}
				?>	
			</div>
		</div>
		
		
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>

	





