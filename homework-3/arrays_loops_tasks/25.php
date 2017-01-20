<?php

/*25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</p>*/



for($i = 0; $i < 5; $i++) {
  $arr[$i] = rand(0,20);
  
  if($i == 0) {
    $min = $arr[$i];
    $min_key = $i;
    $max = $arr[$i];
    $max_key = $i;
  }
  if($min > $arr[$i]) {
    $min = $arr[$i];
    $min_key = $i;
  }
  if($max < $arr[$i]) {
    $max = $arr[$i];
    $max_key = $i;
  }  
}
echo "До: <pre>"; 
print_r($arr); 
echo "<br>";
$arr[$max_key] = $min;
$arr[$min_key] = $max;
$arr = array_unique($arr);
echo "После: <pre>"; print_r($arr);
echo "<br>Максимальное: ".$max.";   Минимальное: ".$min.";";


	

