<?php
/*В класс Car из предыдущих заданий
добавить конструктор, который выводит
сообщение Car created при создании
нового экземпляра класса. Создать
 контактную форму. Создать скрипт обработчик
контактной формы. Создать класс ContactForm
со свойствами, значения которых совпадают с
 названиями полей формы. Создать экземпляр класса
ContactForm по массиву $_POST при отправке формы.
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

<div>
    <table>
        <form method="post">
            <tr><td>Имя: </td><td><input type=text name=name></td></tr>
            <tr><td>Пароль:</td><td><input type=password name=pass></td></tr>
            <tr><td>Пароль:</td><td><input type=password name=pass_again></td></tr>
            <tr><td>e-mail:</td><td><input type=text name=email></td></tr>
            <!--<tr><td>URL:</td><td><input type=text name=url></td></tr>-->
            <tr><td><td><input type=submit value="Зарегистрировать"></td></tr>
        </form>
    </table>
</div>

   <?php
   //Проверяем не пустой ли сурерглобальный массив $_POST
   if (empty($_POST['name'])) exit();
   //Проверяем, правильно ли заполнены обязательные поля
   if (empty($_POST['name'])) exit('Поле "Имя" не заполнено!');
   if (empty($_POST['pass'])) exit('Одно из полей "Пароль" не заполнено');
   if (empty($_POST['pass_again'])) exit('Одно из полей "Пароль" не заполнено');
   if ($_POST['pass'] != $_POST['pass_again']) exit('Пароли не совпадают');
   //Если введен e-mail, проверяем его на соответствие
   $emailErr='';
   $email='';
   if (!empty($_POST['email']))
   {
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Email is required";
       } else {
           $email = test_input($_POST["email"]);
           // check if e-mail address is well-formed
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $emailErr = "Invalid email format";
           }
       }
   }
   //Если на сервере не включены "магические кавычки",
   //обрабатываем введенные пользователем данные
   //функцией mysqli_escape_string()
   $con= new mysqli("localhost","root","","my_base");

   if (!get_magic_quotes_gpc()) {
       $_POST['name'] = $con->real_escape_string($_POST['name']);
       $_POST['pass'] = $con->real_escape_string($_POST['pass']);
       $_POST['email'] = $con->real_escape_string($_POST['email']);
       $_POST['url'] = $con->real_escape_string($_POST['url']);
   }
   //var_dump($_POST);die();
   //2. Блок проверки имени на уникальность
   //
   //Устанавливаем соединение с базой данных

   // Check connection
   if ($con->connect_error)
   {
       echo "Failed to connect to MySQL: " . $con->connect_errno;
   }

   $con->query("SELECT COUNT(*) FROM userlist WHERE name = '$_POST[name]'");

   //$result=mysqli_query($con, $sql);
   if (!$con) exit("Ошибка - ".$con->error);
   $total = $con->store_result();
   if ($total > 0)
   {
       exit("Данное имя уже зарегестрированно. Пожалуйста, выберите другое");
   }
   //var_dump($total);
   //die();
   //3. Блок регистрации пользователя
   //
   //Формируем и выполняем SQL-запрос на
   //добавление ного пользователя
   $query = "INSERT INTO userlist
           VALUES(NULL,
               '$_POST[name]',
                '$_POST[pass]',
                '$_POST[email]',
                '$_POST[url]')";


   //var_dump($_POST); die();  '$_POST[url]')";

   if($result=$con->query($query))
   {
       //Осуществляем перезагрузку страницы
       //чтобы сбросить пост данные
       echo "<HTML><HEAD>
           <META HTTP-EQUIV='REFRESH' CONTENT='0'; URL='$_SERVER[PHP_SELF]'>
          </HEAD></HTML>";
   } else exit("Ошибка при добавлении данных -".$con->error);
   if (!$con->query()) {
       die('Error: ' . $con->error);
   }
   echo "1 record added";

   mysqli_close($con);


   class ContactForm
        {
        public $name;
        public $pass;
        public $email;


    }


    class Car
    {

        private $price;
        public $brand;
        public $model;
        public $year;
        public $driver ;

        public function __construct($str)
        {
         echo $str;
        }

    }

$newCar = new Car('Car created');

   $_POST =  array('name'=>'Alex', 'pass'=>'123', 'email'=>'google@gmail.com');

   $obj = (object)$_POST;
   echo '<pre>';
   var_dump($obj);
print_r($obj);

   echo "<pre>";
    echo "<br>";
   echo "</pre>";

    ?>
</p>
</body>
</html>