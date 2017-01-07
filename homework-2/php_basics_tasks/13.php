<?php


    $s = 40;
    $t = 2;
	$c = 3.6;
     
    function speed($s, $t) {
    $result = $s/$t - "км/ч";
	
    return $result;
    }
	        
	    $v = speed($s, $t);
		$a = $v/$c;
		$d = "$v км/ч";
		$f = "$a м/с";
		
    echo $d;
	echo '<br/>';
	echo $f;
	

?>