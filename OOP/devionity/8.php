<?php/*Создать класс Car. Записать в этот класс свойства
 brand, model, year, driver. Создать экземпляры машин
toyota Corolla (2000), Mazda 6 (2015), ford Taurus (1995) .
В рамках предыдущего задания создать экземпляры класса
User для нескольких пользователей системы.
В свойство driver объектов класса Car записать
 объекты класса User. Вывести объекты класса
 Car на экран при помощи var_dump(), print_r()
*/?>
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

    }
    class Car {
        public $brand;
        public $model;
        public $year;
        public $driver ;
    }
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
    print_r($toyota);
    print_r($mazda);
    print_r($ford);
   // print_r($personOne);
    //print_r($personTwo);
   // print_r($personThree);
    ?>
</p>
</body>
</html>