<?php
/*Создать функцию, которая принимает один аргумент в виде массива 
и дописывает в него последним элементом 
количество значений массива
*/

function test($number)
{
	
}
$number = array("orange", "banana");

array_push ($number, "apple");
array_push($number, count($number));

echo "<pre>";
print_r($number);
echo "</pre>";

