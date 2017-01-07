<?php

$a = 5;
$b = 10;
$oper = '-' ;
 
// Функция вывода результата.
function show_result($a, $b , $oper) {
 
 $result = null;
 if ($oper == "+")       {  $result = $a + $b;  }
 else if ($oper == "-")  {  $result = $a - $b;  }
 else if ($oper == "*")  {  $result = $a * $b;  }
 else if ($oper == "/")  {  $result = $b != 0 ? $a / $b : "на ноль делить нельзя!"; }

 }
       $c =show_result($a, $b, $oper);
	   
echo $c;

?>