<?php

$h1= fopen('test.php', 'r+'); 
fwrite($h1, "You are so sweet my little baby!" . PHP_EOL);
fclose($h1);

// can read from and write to file
$h2 = fopen('test.php', 'w'); 
fwrite($h2, "Look, I'm here!");
fclose($h2);
// can write to file


 
	
