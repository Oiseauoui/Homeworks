<?php

/*24. Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.</p>*/



$number = "1666678888999000";
echo "<b>Искомое число</b> - $number <br>";
echo "<br>";
foreach (count_chars($number, 1) as $i => $val) {
	
   echo "\"" , chr($i) , "\" встречается  $val раз(а) <br> \n";
}

echo "<br>";
echo "<br>";


//http://php.net/manual/ru/function.count-chars.php

echo "Второй вариант: <br>";

    $s = 1;
	$result = 0;
	$arr = str_split($number);
	foreach ($arr as $item) {
		if ($item == $s) {
			$result = ++$result;
		}
	}
	echo "Количество вхождений цифры <i>{$s}</i> - {$result} раз(а);<br>";
	