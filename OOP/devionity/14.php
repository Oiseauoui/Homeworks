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
        protected $login = "Good";
        protected $password = "123";
        protected $email = "daf@com.ua";
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
      public $login = "Nice";
       public $name;
        public $password = "3333";
        public $email = "gaff_gaff@com.ua";

    }
    class Admin extends User
    {
        public $name;

    }

$manager = new Manager();
$admin = new Admin();
$manager->name = 'Adam';
$admin->name = 'Kris';
echo "<pre>";
print_r($admin);
print_r($manager);
   echo "</pre>";

    ?>
</p>
</body>
</html>