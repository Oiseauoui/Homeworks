<?php

$a = array(26, 17, 136, 12, 79, 15);

$result=0;
 foreach($a as $b) {
	 $result += ($b^2);
 }
echo "$result - this is my sum sq";
