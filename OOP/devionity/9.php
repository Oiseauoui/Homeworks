<?php
/*Для класса User из предыдущего занятия
создать методы login(), logout(), которые
просто выводят на экран соответствующее
сообщение. Создать экземпляр класса,
вызвать созданные методы.*/
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

        public function login()
        {
          echo 'Войти';
        }
        public function logout()
        {
          echo 'Выйти';
        }

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
   // print_r($toyota);
   //print_r($mazda);
   //print_r($ford);
   $personOne->login();// Войти
   $personOne->logout();// Выйти


    ?>
</p>
</body>
</html>