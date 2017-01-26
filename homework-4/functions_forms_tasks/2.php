<?php
/*Создать форму с элементом textarea. При отправке формы скрипт должен
	выдавать ТОП3 длинных слов в тексте.
Реализовать с помощью функции.
*/

function getThreeLongWords($arr_str){
	foreach($arr_str as $words){
			$word_leng = strlen($words);
			$new_arr[$word_leng] = $words;
	}
	krsort($new_arr);
	return $new_arr;
}
?>

<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №2</title>
   
    <meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="header">
		
			<h2>ТОП3 длинных слов в тексте</h2>
			<br>
		
	</div>
	<form action="2.php" method="post">
	<textarea name="str" value="text" class="text"></textarea>
	<div>
			<div>
				<button type="submit" value="Отправить" class="button">Отправить</button>
			</div>
		</div>
</form>
<div>
		<?php
		if(!empty($_POST)){
  
	$arr_str = explode(" ", $_POST['str']);
  	$new_arr = getThreeLongWords($arr_str);
	$max_len = count($new_arr);
	$min_len = $max_len -3;
	foreach($new_arr as $key => $long_word){
		if($key > $min_len){
			echo "<div class=\"text\">{$long_word}</div>";
        }
	}
}
?>
</div>
	</div>
</body>
</html>
