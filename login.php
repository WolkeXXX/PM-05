<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $login = $_POST["login"];
  $password = $_POST["password"];
  $sql = "SELECT * FROM users WHERE login='$login' AND password='$password'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    setcookie("user", $login, time() + 3600);
    header("Location: profile.php");
    exit;
  } else {
    echo "Неверный логин или пароль.";
  }
}
$conn->close();
?>
