<?php

$num = 200 ;
while ($num < 400) {
    $count=0;
    for ( $i=1;$i<=$num;$i++) {
        if (($num%$i)==0) {
           $count++;
		
        }
    }
    if ($count<3) {
    echo $num." , ";
	break;
    } $num=$num+1;
}
 ?>	
	
