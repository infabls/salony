<html lang="ru-RU">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $descr; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="generator" content="2018.0.0.379">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >
	<p>ГОРОДСКОЙ ИНФОРМАЦИОННЫЙ СПРАВОЧНИК В ФОРМАТЕ 360<span>О</span></p>

при воспроизведении 360 видео - Вращайте изображение с помощью мыши в любую сторону чтобы осмотреться
ДОБАВИТЬ КОМПАНИЮ
			<span class="shadow rounded-corners clearfix colelem placeholder" data-placeholder-for="u105207_content"><!-- placeholder node --></span>

								<p id="u20221-2">ЕДА</p>
								<p id="u20222-2">Рестораны, кафе, банкетные залы, кулинарии, столовые</p>
								<p id="u20222-4">в Усть-Каменогорске</p>
							</div>
								<p id="u451-2">При воспроизведении 360 видео - вращайте изображение в любую сторону чтобы осмотреться</p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<?php 
				// цикл вывода списка компаний
				for ($i=0; $i < $company_count; $i++) { 
					echo('<p>Title is ' . $company_data[$i]['title'] . '</p>
						<a href="'. $company_data[$i]['url'] .'"><p>Смотреть</p></a>
						<p>Новое заведение в Усть-Каменогорске. Рестобар "Аура".</p>
						</div>'
						);
				} 	
			?>
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
<?php  ?>
    <div id="map" style="width:500px; height:400px"></div>
    <script type="text/javascript">
    var map;
    DG.then(function () {
        map = DG.map('map', {
            center: [49.965929, 82.583435],
            zoom: 13
        });
        <?php 
        	for ($i=0; $i < $company_count; $i++) { 
        		echo(
        			'DG.marker([' . $company_data[$i]['latitude'] . ', ' . $company_data[$i]['longitude'] . ']).addTo(map).bindPopup(\'<a target="_blank" href="'.$company_data[$i]['url'].'">'.$company_data[$i]['title'].'</a>\');'
        		);
        		
        	}
        ?>
        var popup = DG.popup()
		    .setLatLng(latlng)
		    .setContent('')
		    .openOn(map);
        // DG.marker([49.965929, 82.583435]).addTo(map);
    });
</script>




 </body>
</html>
	