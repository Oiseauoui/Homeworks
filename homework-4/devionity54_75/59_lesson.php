<?php

$a = 'Hello world!';
$length = strlen($a);
echo $length; // we got 12

echo '<br>';

$a = 'Hello world!';
$p = strpos($a, 'world');
echo $p; // we got 6

$p1 = strpos($a, 'Hello');
var_dump($p1); // int(0)

$p2 = strpos($a, 'Boo');
var_dump($p2); // bool(false)

echo '<br>';

$a = 'Hello world!';
$zeros = '000';
$result = str_replace('o', $zeros, $a);
echo $result; // we got Hell000 w000rld!

echo '<br>';

$a = '23-4555-23';
$pieces = explode('-', $a);
print_r($pieces); // Array ( [0] => 23 [1] => 4555 [2] => 23 )