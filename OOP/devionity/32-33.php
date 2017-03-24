<?php
/*
 32. Создать интерфейс для класса User
из предыдущих заданий

33. Реализовать интерфейс из предыдущего
задания классом User

*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Class</title>
    <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<p>
    <?php
  interface Face
  {
    public function eyes();
    public function nose();
  }

    class User implements Face {

        public function eyes()
        {
        echo 'blue';
        }
        public function nose()
        {
        echo 'big';
        }
        protected $name = 'Alex';
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

        public function __get($name)
    {
        echo "You tried to get {$name}";
    }

    public function __set($name, $val)
    {
        echo "You tried to set {$name} to {$val}";
    }

    public function __clone()
    {
        echo 'Cloned!';
    }

    }

    class Manager extends User
    {

    }
    class Admin extends User
    {

    }

       $manager = new Manager;
       $admin = new Admin;

    $personOne = new User;
    $personTwo= new User;
    $personThree= new User;


echo "<pre>";
$personOne->name = 'Niko'; // You tried to set bar to 2
echo "<br>";
$personOne->nameAnother = 'Karim'; // You tried to set foo to 3
print_r($personOne);
$personTwo->eyes();
echo "<br>";
$personThree->nose();
echo "</pre>";

    ?>
</p>
</body>
</html>