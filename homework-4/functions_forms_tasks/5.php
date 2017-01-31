<?php

/*Написать функцию, которая выводит список файлов в
 заданной директории, которые содержат искомое слово.
 Директория и искомое слово задаются как параметры функции.</p> */


$directory = '4_directory';
$word = 'я';

function searchfile($directory, $word){

$arr_dir = scandir($directory);
foreach ($arr_dir as $file){
if (file_exists($directory . '/' . $file) && $file != '.' && $file != '..') {
$text = file_get_contents($directory . '/' . $file);
if (strripos($text, $word) == true) {

?>
<html>
<head>
	<link href="functions.css" rel="stylesheet" type="text/css">
	<title>Задание №5</title>

	<meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="header">
		<h2>Искомое слово: </h2>
		<?php
		echo '<h2><b>' . $word . "</b></h2><br>";

		?>
		<p><b>Список файлов: </b></p><br>
		<?php
		echo '<pre>';
		echo "<i>$file</i> <br>";
		echo '</pre>';
		?>
	</div>
	<?php
	echo '<pre>';
	echo file_get_contents($directory . '/' . $file);
	echo '</pre>';
	}
	}
	}
	}
		?>

	<?php
	searchfile($directory, $word);
?>


</body>
</html>