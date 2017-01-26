<?php

$h = fopen('test.txt', 'r');
$text = fread($h, 6);
$text = fread($h, filesize('test.txt'));
echo $text;