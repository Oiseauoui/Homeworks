<?php
/*Создать массив, который описывает
сообщение ключами name, email, message
с соответствующими значениями. Привести
 массив к объекту. Проанализировать
 результат при помощи var_dump.
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
   $a = array('name'=>'Alex', 'email'=>'google@gmail.com',
    'message'=>'send message');
   $obj = (object)$a;
   echo '<pre>';
   var_dump($obj);
    ?>
</p>
</body>
</html>