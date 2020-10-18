<?php
// главное чтобы таблица в бд и таблица в гугл диске совпадали
// чтобы вытащить в csv именно лист таблицы - нужно знать ее gid

// защита от переотправки формы
if (isset($_POST['secretkey'])) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
}

// защита от нехороших псов
//password
$pass = '696d29e0940a4957748fe3fc9efd22a3';
?>
<form action="/csv.php" method="POST">
    <input type="password" name="secretkey" placeholder="Ваш пароль" required>
    <input type="submit">
</form>

<?php
if (md5(md5($_POST['secretkey'])) !== $pass) {
    exit();
}

// подключение к бд и настройки
$db['host'] = 'localhost'; 
$db['name'] = 'test'; 
$db['table'] = 'pages'; 
$db['username']='root'; 
$db['password'] = 'root'; 
$db['tables'] = 'pages';
// качаем категории и страницы из гугл диска и сохраняем на сервере
// $categories = file_get_contents('https://docs.google.com/spreadsheets/d/1R87zOW2-990ATjZmc9qHu_CLqkFvLdqFJlY3TWzHgmU/export?format=csv&gid=2135884077');
// file_put_contents('categories.csv', $categories);
$csv_file = 'db.csv';

csv_to_mysql($csv_file, $db);
function csv_to_mysql($csv_file, $db)
{
    if (!file_exists($csv_file)) {
        die('File not found. Make sure you specified the correct path.');
    }
    $database_host = $db['host'];
    $database_name = $db['name'];
    $database_username = $db['username'];
    $database_password = $db['password'];
    $database_table = $db['tables'];
    // подключение к БД через ПДО
    try {   
        $pdo = new PDO("mysql:host=$database_host;dbname=$database_name", 
            $database_username, $database_password,
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            )
        );
    } catch (PDOException $e) {
        die('database connection failed: ' . $e->getMessage());
    }

// очищаем таблицу от имеющихся данных
    $sql33 = "TRUNCATE `$database_table`";
    var_dump($sql33);
    $query = $pdo->prepare($sql33);
    $query->execute(); 


    $input = fopen($csv_file, 'a+');
    $input2 = fopen($csv_file, 'a+');
    $first_row = fgetcsv($input, 1024, ',');

    foreach ($first_row as $name) {
        $values_array[] = ':' . trim($name);
    }

    $columns = implode(', ', fgetcsv($input2, 1024, ','));
    $values = implode(', ', $values_array);

    $count = 0;
    while ($row = fgetcsv($input, 1024, ',')) {
        $sql = "INSERT INTO $database_table($columns) VALUES($values)";
        $query = $pdo->prepare($sql);
        for ($i=0; $i < count($row); $i++) {
            $query->bindParam($values_array[$i], $row[$i]); 
        }
        $query->execute();     
        $count++;
    }

    echo 'Loaded a total of ' . $count . ' records from your CSV file.';
}

