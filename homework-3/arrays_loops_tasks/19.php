<?php

//19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
//текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>


$arr = array('Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс');
	$days = 2; //текущим месяцем
	foreach ($arr as $key => $elem)
	{
		if ($key == $days -1) // потому что $day - это ноль;
		{
			echo "<i>$elem</i><br>";
		}
		else
		{
			echo $elem.'<br>';
		}
	}
echo "<br>";

$d = array("1" => "Понедельник",
			"2" => "Вторник",
			"3" => "Среда",
			"4" => "Четверг",
			"5" => "Пятница",
			"6" => "Суббота",
			"7" => "Воскресенье"
	);

	$day = date('N');
	foreach ($d as $key => $item) {
		if ($key == $day) {
			echo "<i>$item</i><br>";
		} 
		else {
			echo "$item <br>";
		}
	}
