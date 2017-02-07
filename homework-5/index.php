<?php
/* Пусть в массиве хранятся различные цвета для фона нашего сайта
 * (5 цветов на выбор). Выбор цвета нужно сделать через поле ввода
 * типа выпадающий список. Сделайте, чтобы браузер запоминал цвет фона
 * сайта, куда мы заходим, на 5 минут, через 5 минут он снова становится
 * тем, каким был по умолчанию и снова можно выбрать и задать цвет фона из выпадающего списка.

Сделайте две страницы: index.php и hello.php.
 * При заходе на index.php спросите с помощью формы имя пользователя,
 * запишите его в сессию. При заходе на hello.php поприветствуйте
 * пользователя фразой "Привет, %Имя%!".

Создать сайт из четырех страниц. На четвертой странице
 * пользователь видит список страниц, которые он посещал.

 */

session_start();
if(isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
    header('Location: hello.php');
}

//echo '<a href="hello.php">На страницу 2</a>';
//$_SESSION['str'] = 'contacts.php <br>';

$colors = array('снег' => '#8B8989', 'морская волна' => '#008B8B', 'зеленый' => '#3CB371',  'золотой' => '#B8860B',  'бежевый'=>'#CDBE70');
$bgcolor = '#FFFAF0'; // Цвет фона по умолчанию (белый). Цвет будет взят из куки, если соответствующая куки будет существовать (реализуем позже)
//var_dump($bgcolor);
if ( isset($_COOKIE['bgcolor']) && in_array($_COOKIE['bgcolor'], $colors) )
{
    $bgcolor = $_COOKIE['bgcolor'];
}
//--Проверяем, был ли передан GET-параметр bgcolor и имеется ли он в нашем массиве. А то, знаете ли, могут передать мало ли чего, а нам потом расхлебывать ;)
if ( isset($_GET['bgcolor']) && in_array($_GET['bgcolor'], $colors) )
{
    $bgcolor = $_GET['bgcolor']; //--Это будет наш новый фон для страницы
    setcookie('bgcolor', $bgcolor); //--Сохраняем значение цвета фона в куки. Подробности ниже в статье
}
setcookie('bgcolor', $bgcolor, time()+120); //--Сохраняем значение цвета фона в куки


?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title> Home</title>
    <link href="site.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        body { background: <?php echo $bgcolor; ?>; }
    </style>
</head>
<body>
<?php include('header.php');?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <td>Желаемый фон:</td>
                <td>
                    <select name="bgcolor">
                        <?php

                        foreach($colors as $key => $value)
                        {
                            //--Определяем, какой из цветов выбран пользователем (если выбран)
                            $selected_attr = ($bgcolor == $value) ? ' selected="selected"' : '';
                            echo '              <option value="' . $value . '"' . $selected_attr .'>' . $key . '</option>'. "\n";
                        }

                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Выбрать" />
    </form>

    <?php
    // Подключаем меню
    include('menu.php');
    ?>

    <form action="index.php" method="post">
        <label for="name">Введите имя</label>
        <input type="text" id="name" name="name">
        <input type="submit">
    </form>

</body>
</html>


