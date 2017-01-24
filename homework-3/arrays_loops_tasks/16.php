<?php

//16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
//выведите на экран столбец элементов массива, как показано на картинке.
//1, 2, 3
//4, 5, 6
//7, 8, 9

$arr= array (1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach($arr as $b => $c) {
    if($b <= 2) {
        $a = $c;
        echo $a . "," . "\n";
    }
}
echo "<br>";
foreach($arr as $b => $c) {
    if($b > 2 and $b <=5) {
        $a = $c;
        echo $a . "," . "\n";
    }
}
echo "<br>";
foreach($arr as $b => $c) {
    if($b > 5 and $b <=8) {
        $a = $c;
        echo $a . "," . "\n";
    }
}
echo "<br>";
echo "Второй способ<br> ";


$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach($arr as $ar){
    if ($ar % 3 == 0){
        echo $ar ."<br>";
    }
	else{
        echo $ar .", ";
    }
    }
	

