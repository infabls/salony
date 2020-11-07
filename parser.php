<?php 
require 'config.php';

// сканируем директорию с файлами
$files = scandir('json');


// MySQLi Object-oriented
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


// цикл занесения данных в таблицу
$a = count($files);
for ($i=2; $i < $a; $i++) { 
	$json = file_get_contents('json/' . $files[$i]);
	// превращение json в mysql
	$data = json_decode($json, TRUE);

	$id = $data['data']['firm']['id'];
	$name = $data['data']['firm']['name'];
	$address = $data['data']['firm']['address'];
	$type = $data['data']['firm']['type'];
	$urlkey = $data['data']['firm']['urlKey'];
	$avatarurl = $data['data']['firm']['avatarUrl'];
	$cityname = $data['data']['firm']['cityName'];
	$description = $data['data']['firm']['description'];
	$instagramProfile = $data['data']['firm']['instagramProfile'];
	$averageRating = $data['data']['firm']['averageRating'];
	$reviewCount = $data['data']['firm']['reviewCount'];
	// проверка на количество номеров
	$phoneNumbers = $data['data']['firm']['phoneNumbers'][0];
	$location = $data['data']['location'];
	
	// проверка на наличие локации в 2гис
	if ($location['type'] == 'TWO_GIS') {	
	$markerX = $location['markerX'];
	$markerY = $location['markerY'];
	$centerX = $location['centerX'];
	$centerY = $location['centerY'];
	$zoom = $location['zoom'];
	}

	// добавление данных в таблицу
	$sql = "INSERT INTO pages (id, name, address, type, urlKey, avatarUrl, cityName, description, instagramProfile, averageRating, reviewCount, phoneNumbers, markerX, markerY, centerX, centerY, zoom)
	VALUES ('$id', '$name', '$address', '$type', '$urlkey', '$avatarurl', '$cityname', '$description', '$instagramProfile', '$averageRating', '$reviewCount', '$phoneNumbers', '$markerX' ,'$markerY' ,'$centerX' ,'$centerY' ,'$zoom');";

	// var_dump($sql);
	// выполнение запроса
	$result = $conn->query($sql);
	if ($result) {
		echo "Страница успешно сохранена в базу данных.";
		echo "Страница успешно сохранена в базу данных.";
	}
	// var_dump($result);
}
	$conn->close();

?>