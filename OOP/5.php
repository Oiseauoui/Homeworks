<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 27.03.2017
 * Time: 23:19
 */
abstract class B {
    public $var = "B";

    function __construct(){
        $this->var = "B";
    }
}

class E extends B {
    public $var = "E";

    function __construct() {
        $this->var = "E";
    }

    function __clone() {
        $this->var = "C";
    }
}

$var1 = new B();
$var2 = new E();
$var3 = $var1;
$var4 = clone($var2);
$var5 =& $var4->var;
$var2->var = "V";
//Fatal error: Cannot instantiate
// abstract class B in C:\xampp\htdocs\Homeworks\OOP\5.php on line 28