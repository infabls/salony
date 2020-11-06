<?php 

$base_url = 'https://zapis.kz/rest/clients-app/v1/firms/';

// устанавливаем в заголовке апи ключ
$opts = [
    "http" => [
        "method" => "GET",
        "header" => "Accept-language: en\r\n" .
         "api_key: 8e56a169-e1d6-48e6-b29d-27f60b701a54\r\n"
    ]
];

$context = stream_context_create($opts);


// список ссылок
$links = file('firms.txt');
// var_dump($links);



// цикл парсинга
$o = count($links);
for ($i=0; $i < $o; $i++) { 
	$json = file_get_contents($base_url . trim($links[$i]), false, $context);
	file_put_contents('json/' . trim($links[$i]) . '.json', $json);
}

