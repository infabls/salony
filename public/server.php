<?php 
// конфигурационные данные
require '../config.php';

$urlKey = substr($_SERVER['REQUEST_URI'], 1);
// ищем страницу в бд
// выборка всего из бд по найденному урлу
$sql = "SELECT * FROM pages WHERE urlKey = '$urlKey'";
$sql2 = "SELECT * FROM categories WHERE url = '$url'";
// создаем подключение
$conn = new mysqli($servername, $username, $password, $dbname);
// проверка подключения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// выполнение запроса
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
// если результатов не найдено
if ($result->num_rows < 1 && $result2->num_rows < 1) {
// редирект на 404 ошибку
  header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
  include("404.php");
  exit;
}
// если это страница компании, то 
if ($result->num_rows > 0) {
  // присваиваем значения переменных и закрываем соединение
  while($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $name = $row['name'];
    $address = $row['address'];
    $avatarUrl = $row['avatarUrl'];
    $cityName = $row['cityName'];
    $description = $row['description'];
    $instagramProfile = $row['instagramProfile'];
    $averageRating = $row['averageRating'];
    $reviewCount = $row['reviewCount'];
    $phoneNumbers = $row['phoneNumbers'];
    $markerX = $row['markerX'];
    $markerY = $row['markerY'];
    $centerX = $row['centerX'];
    $centerY = $row['centerY'];
    $zoom = $row['zoom'];
  }
  require '../template.php';
}  

// если это страница категории, то 
if ($result2->num_rows > 0) {
  // присваиваем значения переменных
  while($row = $result2->fetch_assoc()) {
    $id = $row['id'];
    $title = $row['title'];
    $descr = $row['descr'];
    $keywords = $row['keywords'];
    $h1 = $row['h1']; 
    $content = $row['content']; 
    $pagetype = $row['pagetype'];
  }
  // выборка всех компаний в категории
  $sql3 = "SELECT * FROM companies WHERE cat_id = '$id'";
  $result3 = $conn->query($sql3);
  $conn->close();
  // количество компаний в категории
  $company_count = $result3->num_rows;

  // если результаты есть, то
  if ($result3->num_rows > 0) {
    for ($i=0; $i < $company_count; $i++) { 
      $company_data[$i] = $result3->fetch_assoc();
    }
  } else {$company_count = 0;}
  require '../cat_template.php';
}  

// закрываем соединение


// выбор шаблона в зависимости от типа страницы
