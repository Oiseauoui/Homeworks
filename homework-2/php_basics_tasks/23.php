<?php

$str = 'Это моя строка в одинарных кавычках <br/>';
echo $str; 

echo "Это моя строка в двойных кавычкач \n <br/>";

$foo = <<<END
Это моя строка heridoc.
END;

echo $foo;
// echo printf print
?>