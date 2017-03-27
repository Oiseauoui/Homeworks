<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 27.03.2017
 * Time: 23:21
 */

class test{
    public $ab = 10;
    function __construct($a){
        $this->ab = $a;
    }
    function __construct($a,$b){
        $this->ab = $a+$b;
    }
}
$c = new test(20,10);
echo $c->ab;
//Fatal error: Cannot redeclare test::__construct()
// in C:\xampp\htdocs\Homeworks\OOP\7.php on line 14
//Пояснение: В PHP не может быть два конструктора

