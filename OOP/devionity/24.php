<?php
/*В класс User из предыдущих заданий добавить
магические методы __get, __set для закрытых
 свойств, которые будут возвращать /
присваивать соответствующие значения.

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
echo "</pre>";

    ?>
</p>
</body>
</html>