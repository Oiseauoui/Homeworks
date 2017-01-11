<?php


$a = 5;
$b = 0;
$operator = 'dil' ;
 
// Функция вывода результата.
if ($operator === "plus" )
{
    $r = $a+$b;
};
if ($operator === "minus" )
{
    $r = $a-$b;
 
};
if ($operator === "dil")
{
    $r = $b != 0 ? $a / $b : "на ноль делить нельзя!";
 
};
if ($operator === "mnoz" )
{
    $r = $a*$b;
 
}
echo $r;
?>