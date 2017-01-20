<?php
  $num = 1 ;
while ($num < 100 ) {
    $count=0;
    for ( $i=1;$i<=$num;$i++) {
        if (($num%$i)==0) {
            $count++;
        }
    }
    if ($count<3) {
    echo $num." , ";
    } $num=$num+1;
}


              
 ?>	
	
