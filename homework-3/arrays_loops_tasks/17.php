<?php

//17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
//месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>


$arr = array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
	$month = 1; //текущим месяцем
	foreach ($arr as $key => $elem)
	{
		if ($key == $month -1) // потому что $month - это ноль;
		{
			echo "<b>$elem</b><br>";
		}
		else
		{
			echo $elem.'<br>';
		}
	}




	

