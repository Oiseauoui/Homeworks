<form action="27_lesson.php" method="get">
    <input type="text" name="name"/><br> <!-- Juli-->
	<input type="text" name="email"/><br><!-- dafishloa@yandex.ua -->
    <input type="text" name="telefone"/><br> <!-- 05073...-->

    <input type="submit"/>
</form>
<?php
    print_r($_GET);
	
?>
<form action="27_lesson.php" method="post">
    <input type="text" name="name"/><br> <!-- Juli-->
	<input type="text" name="email"/><br><!-- dafishloa@yandex.ua -->
    <input type="text" name="telefone"/><br> <!-- 05073...-->

    <input type="submit"/>
</form>
<?php
    print_r($_POST);

?>