<?php
/*В класс Car из предыдущих заданий
добавить private свойство price, а также
 публичные геттер и сеттер для него. Геттер
 должен зависеть от одного параметра. В
зависимости от того, было ли в функцию
геттера передано true, выводить отформатированную
 цену, либо же в обычном виде (использовать
 функцию number_format). Сеттер должен приводить
входящий параметр к числу, у которого не более 2
 знаков после запятой (использовать round).
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reconstructing the Person Class</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<p>
    <?php
    class User {
        public $login;
        public $password;
        public $email;
        public $rating = 0;
        public $isLogged;

        public function login()
        {
          echo $this->isLogged=true;
        }
        public function logout()
        {
          echo $this->isLogged=false;
        }

    }
    class Car {

        private $price;
        public $brand;
        public $model;
        public $year;
        public $driver ;

        public function setPrice($price)
        {
          $this->price=round($price,2);
        }
        public function getPrice($format=false)
        {
          return $format ? number_format($this->price, 2, '') : $this->price;
        }

    }
   echo "<pre>";

    $car = new Car();

      $car->setPrice(1230.7655);
      var_dump($car->getPrice());
       print_r($car);

   $car->setPrice(3399.875);
     var_dump($car->getPrice());
    print_r($car);

   $car->setPrice(3336.5);
      var_dump($car->getPrice());
       print_r($car);

   $car->setPrice(0);
      var_dump($car->getPrice());
       print_r($car);

   $car->setPrice(123.777);
   var_dump($car->getPrice());
    print_r($car);

   echo "</pre>";

    ?>
</p>
</body>
</html>