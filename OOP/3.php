<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 27.03.2017
 * Time: 23:13
 */
class Fruit
  {
          protected $mType = ' ';
     protected $mColor = 'Green';
      public function getType()
      {
                 return $this->mType;
     }

    final public function getColor()
     {
         return $this->mColor;
     }
 }

final class Apple extends Fruit {
     protected $mType = ' ';
     protected $mColor = 'Red';

    final public function getColor()
   {
        return "Apple:".$this->mColor;
   }
 }

 $generalFruit = new Fruit();
$myApple = new Apple();
echo $generalFruit->getType().":".$generalFruit->getColor()
 ." ".$myApple->getType().":".$myApple->getColor();
// Пояснение: getColor() уже
// объявлен финальной функцией в классе Fruit, поэтому в Apple её нельзя переопределить


//Fatal error: Cannot override final method
// Fruit::getColor() in C:\xampp\htdocs\Homeworks\OOP\3.php on line 31
