<?php
include('header.php');
?>


<div>
<?php
session_start();
echo '<a href="visits.php">Перейти на сторінку відвідувань</a>';
$_SESSION['str'] = 'contacts.php <br>';
?>
</div>
<div>

 <?php
echo '<a href="index.php">Повернутись на головну сторінку</a>';
$_SESSION['str'] = 'index.php <br>';
?>
</div>

<?php
// Подключаем код для сохранения информации о странице в сессии
include('savepage.inc.php');

// Подключаем код для вывода информации обо всех посещенных страницах
//include('visited.inc.php');
//
//
?>

<div class="font">
    <div>
        <h3>Адреса</h3>
    </div>
    <div>
        <h4>Київ</h4>
        <p>вул. Коцюбинського 14</p>
        <h4>Номери</h4>
        <p>Телефон : 050 738 05 60
            <span></span>
        </p>
    </div>
</div>
<?php include('login.php');
?>

<div>
    <form action="" method="post">
    <div>
        <div>
            <fieldset>
                <input type="text" name="name" class="field" value="" placeholder="Ввеіть Ваше Ім'я...">
            </fieldset>
        </div>
    </div>
    <div>
        <div>
            <fieldset>
                <input class="field" type="text" name="comment" value="" placeholder="Введіть текст...">
            </fieldset>
        </div>
    </div>
    <div>
        <div class>
            <input class="button"  name="submit" type="submit" value="ВІДПРАВИТИ">
        </div>
    </div>
</form>
</div>

<div class="clearfix"> </div>
</div>
</div>


</body>
</html>
