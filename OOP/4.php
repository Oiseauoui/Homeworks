<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 27.03.2017
 * Time: 23:18
 */

class A {
    private $var1;
    public function __construct($var1) {
        $this->var1=$var1;
    }
    public function method1() {
        $a = new A(5);
        echo $a->var1;
    }

}

$cl = new A(10);
$cl->method1(); // 5
//Пояснение: Объекты одного типа имеют
// доступ к приватным членам, даже если
// это разные екземпляры. Так как, реализация
// объектов уже известна внутри этих объектов
// http://php.net/manual/en/language.oop5.visibility.php#language.oop5.visibility-other-objects

