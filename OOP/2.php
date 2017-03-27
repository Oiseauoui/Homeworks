<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 27.03.2017
 * Time: 23:11
 */
interface iSingleton {
    public static function getInstance();
}

class singleton implements iSingleton {
    private static $instance = false;
    final public static function getInstance() {
        return (self::$instance) ? self::$instance : self::$instance = new static;
    }

    private function __construct(){}
    private function __clone(){}
    function f1(){
        echo 'Singleton::f1()';
    }

}

class cl1 extends singleton{
    function f1(){
        echo 'cl1::f1()';
    }
}

class cl2 extends singleton{
    function f1(){
        echo 'cl2::f1()';
    }
}

cl1::getInstance()->f1();
cl2::getInstance()->f1(); // cl1::f1()cl1::f1()
//Пояснение: Позднее статическое связывание в паттерне
// "Одиночка" через перенаправленный вызов static.
// getInstance() всегда возвращает единственный
// и тот же самый экземпляр объекта. Первым была
// вызвана инициализация объекта cl1, все последующие
// инициализации будут возвращать первый инициализированный объект