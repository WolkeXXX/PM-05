<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="header">
            <nav class="menu">
             <ul>
				<li><a href="#">Главная</a></li>
             </ul>
            </nav>
</header>
    <div class="cat">
<?php
if (!isset($_COOKIE["user"])) {
  header("Location: index.php");
  exit;
}
echo "<h2>Добро пожаловать, " . $_COOKIE["user"] . "</h2>";
echo "<a href='logout.php'>Выйти</a>";
?>
<br>
<div class="rer">
<h2>Информация о пользователе:</h2>
        <p><strong>Имя:</strong> Проскурин Григорий Николаевич</p>
        <p><strong>Email:</strong> Deemeehooply@gmail.com</p>
        <p><strong>Телефон:</strong> +79967023929</p>
</div>
<h2>История покупок</h2>
        <div class="rer1">
		<center>
            <img src="img/image1.jpg" width="300" alt="Product 1">
            <h3>Пылесос</h3>
            <p>Цена: $50</p>
		</center>
        </div>
        <div class="rer1">
		<center>
            <img src="img/image2.jpg" width="300" alt="Product 2">
            <h3>Диван</h3>
            <p>Цена: $250</p>
		</center>
        </div>
    </div>
</body>
</html>
