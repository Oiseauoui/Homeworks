<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
//$en = array('green', 'red','blue');
//$ru = array('зеленый', 'красный', 'голубой');


 foreach($arr as $key=>$item) {
	 
	 $en[] = $key;
	 $ru[] = $item;
	
 

	var_dump($en, $ru);
	
 }