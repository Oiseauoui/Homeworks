<?php

$age = 50.00;

        
    if(is_int($age) && $age > 18 && $age <= 59) {
       echo  "Вам еще работать и работать";
    }
    if (is_int($age) && $age >= 0 && $age <=17) {
		echo "Вам еще рано работать";
	}
			
	if (is_int($age) && $age > 59) {
		echo  "Вам пора на пенсию";
	}
	if (is_int($age) && $age < 0) {
		echo  "Неизвестный возраст";
		}
     if (is_string ($age)) {
		 echo  "Неизвестный возраст";
	 }
	 else {
		 echo "Неизвестный возраст";

	 }
		
		
	
?>