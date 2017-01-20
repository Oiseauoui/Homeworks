<?php
 
 
$numbers = array(1, 60, 21, 9, 5, 33, 0, -6, 56, 115);

foreach($numbers as $number) {
if(is_int($number) && $number % 3 == 0) {
echo $number. "<br>";
}
}


              
 ?>	
	
