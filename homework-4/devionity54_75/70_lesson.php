<?php
/* Реализовать функцию, которая определяет, будет ли число простым числом */

$n = 36;
function number ( $n )
{
for ( $i = 2; $i*$i <= $n; $i ++ )
if ( $n % $i == 0 ) 
return 0;


return 1;


}
echo number($n);