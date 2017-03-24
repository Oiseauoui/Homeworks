<?php
/*В класс Car из предыдущих заданий
добавить методы showBrand(), showModel()
которые выводят на экран значения свойств
brand, model соответственно. В класс
 User из предыдущих заданий добавить
 свойство isLogged, которое принимает
 true, если пользователь успешно авторизировался,
 и false при выходе из системы. Задать значения
 для этого свойства в методах login(), logout().
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
        public $brand;
        public $model;
        public $year;
        public $driver ;

        public function showBrand()
        {
        echo $this->brand;
        }

        public function showModel()
        {
        echo $this->model;

        }
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