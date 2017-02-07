<?php
/*Создать сайт из четырех страниц. На четвертой странице
 * пользователь видит список страниц, которые он посещал.
*/

include('header.php');
?>
<div>
    <?php
session_start();
//echo 'Перед этим вы посещали страницы<br>';
//$a = $_SESSION['str'];
//echo $a;

echo '<a href="index.php">Повернутись на головну сторінку </a>';
$_SESSION['str'] = 'index.php <br>';
    ?>
</div>
<div>

<?php
if (isset($_SESSION['time'])){
    $c = time() - $_SESSION['time'];
    echo 'Попередній вхід був ' . $c . ' секунд(у) тому';
}
$_SESSION['time'] = time();

// Подключаем код для сохранения информации о странице в сессии
    include('savepage.inc.php');

// Подключаем код для вывода информации обо всех посещенных страницах
include('visited.inc.php');

?>

</div>