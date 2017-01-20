<?php
   
$a = 10;
$b = 0;
   
switch (is_int($a) && is_int($b) && $a>$b) {
	case is_int($a): echo "this is max $a"; break;
	default: echo "this is max $b"; 
}   
 


?>