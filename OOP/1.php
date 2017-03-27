<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 27.03.2017
 * Time: 23:08
 */

class Clazz {
    public $value;
}

$b = new Clazz;
$b->newValue = 1;

$a = $b;
$a->newValue = 2;

echo $b->newValue; // 2
