<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 27.03.2017
 * Time: 23:20
 */

abstract class cOlolo{
    static function dontDoIt(){
        print "wow";
    }
    abstract function doIt();
}

cOlolo::dontDoIt();
//wow