<?php

/*Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать 
только те слова, которые есть и в первом и во втором поле ввода.
Реализацию этой логики необходимо поместить в функцию getCommonWords($a, $b), 
которая будет возвращать массив с общими словами.
*/

function getCommonWords ($a, $b)
{
	$string1 = trim(preg_replace('/[^\w\s]/u', ' ', $a)); // Выполняет поиск и замену по регулярному выражению (лишние пробелы и знаки препинания)
	$string2 = trim(preg_replace('/[^\w\s]/u', ' ', $b));
	$arr1 = explode(' ', $string1);
	$arr2 =	explode(' ', $string2);
	$result = array_intersect($arr1, $arr2);//Вычислить схождение массивов

	return $result;
}
$resultText = '';
$error = '';
if (!empty($_POST)) {
	$text1 = htmlentities($_POST['text1']);// Преобразует символы в соответствующие HTML сущности.
	$text2 = htmlentities($_POST['text2']);
	$result = getCommonWords($text1,$text2); // массив с общими словами
	$resultText = implode(', ', $result);
	
}
?>
<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №1</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="header">
		
			<h2>Поиск слов, которые есть и в первом, и во втором поле ввода</h2>
			<br>
		
	</div>
	<form action="1.php" method="post">
		<div>
			<div>
				<fieldset>
					<label for="text1">Первое поле ввода</label>
					<textarea class="text" name="text1" id="text1" rows="3"></textarea>
				</fieldset>
			</div>
			<div>
				<fieldset>
				
					<label for="text2">Второе поле ввода</label>
				
				
					<textarea class="text" name="text2" id="text2" rows="3"></textarea>
				
				</fieldset>
			</div>
		</div>
		<div>
			<div>
				<button type="submit" value="Отправить" class="button">Отправить</button>
			</div>
		</div>
	</form>
	<div>
		<?php
		if (!empty($resultText)) {
			echo "<div class=\"text\">{$resultText}</div>";
		}
				
		?>
		</div>
	</div>
</body>
</html>