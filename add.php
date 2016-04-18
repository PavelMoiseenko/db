<?php 
	ini_set("display_errors", "1");
?>


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Страница добавления контента в БД</title>

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<div class="row">
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
				<ul class="nav nav-pills nav-stacked">
				  <li><a href="index.php">Главная</a></li>
				  <li class="active"><a href="#">Добавить товар в БД</a></li>
				</ul>
			</div>
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
				<form action="add.php" method="POST" role="form">
					<legend>Добавляем контент в БД</legend>
				
					<div class="form-group">
						<label for="">Наименование товара</label>
						<input type="text" class="form-control" name='title' required="required" placeholder="Введите наименование товара">
						<label for="">Введите описание товара</label>
						<textarea name="description" class="form-control" rows="3" required="required"></textarea>
						<label for="">Введите цену товара</label>
						<input type="text" class="form-control" name="price" required="required" placeholder="Введите цену товара">
						<label for="">Выберите категорию из списка</label>
						<select name="category" class="form-control" required="required">
							<option value="Ноутбуки">Ноутбуки</option>
							<option value="Телефоны">Телефоны</option>
							<option value="Камеры">Камеры</option>
						</select>
						
					</div>
					<button type="submit" class="btn btn-primary" name="ok" value="ok">Добавить товар</button>
				</form>
			</div>
			
		</div>

		
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>
<?php 
	if(isset($_POST['ok'], $_POST['title'], $_POST['description'], $_POST['price'], $_POST['category'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$category = $_POST['category'];
		$conn = mysqli_connect("localhost", "root", "1", "slabel");
		mysqli_set_charset($conn, 'utf8');
		$res = mysqli_query($conn, "INSERT INTO products (title, description, price, category) VALUES ('$title', '$description', '$price', '$category')");
		if($res){
			echo "<h1 style=color:red>Товар успешно добавлен в БД</h1>";
		}
		
	}

?>