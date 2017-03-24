<?php
/*Изменить область видимости свойств
 класса User на protected. Унаследовать
от класса User классы Manager, Admin.
Создать объекты менеджера и админа,
задать значения для свойств объектов.*/
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
        protected $login;
        protected $password;
        protected $email;
        protected $rating = 0;
        protected $isLogged;

        public function login()
        {
          echo $this->isLogged=true;
        }
        public function logout()
        {
          echo $this->isLogged=false;
        }

    }

    class Manager extends User
    {

    }
    class Admin extends User
    {

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

        public function showBrand()
        {
        echo $this->brand;
        }

        public function showModel()
        {
        echo $this->model;

        }
    }
class WaterCar extends Car
{
    public $waterSpeed;
}

       $manager = new Manager;
       $admin = new Admin;

        $toyota = new Car;//("toyota", "Corolla", 2000);
        $mazda = new Car; //("Mazda", "6", 2015);
        $ford = new Car; // ("ford", "Taurus", 1995);

    $personOne = new User;
    $personTwo= new User;
    $personThree= new User;

    $personOne->driver = "Alex";
    $personTwo->driver = "Niko";
    $personThree->driver = "Amile";

    $toyota->brand ="toyota";
    $toyota->model = "Corolla";
    $toyota->year = 2000;
    $toyota->driver = $personOne;


    $mazda->brand ="Mazda";
    $mazda->model = "6";
    $mazda->year = 2015;
    $mazda->driver = $personTwo;

    $ford->brand = "ford";
    $ford->model = "Taurus";
    $ford->year = 1995;
    $ford->driver = $personThree;

    echo "<pre>";
   // var_dump($toyota, mazda, $ford);
   // print_r($toyota);
   //print_r($mazda);
   //print_r($ford);
   //$personOne->login();// Войти
  // $personOne->logout();// Выйти
    $toyota->showBrand();
    echo "<br>";
  $toyota->showModel();

   echo "</pre>";

    ?>
</p>
</body>
</html>