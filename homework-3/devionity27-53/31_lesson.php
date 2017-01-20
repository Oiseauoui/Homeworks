<form action="31_lesson.php" method="post">
    <input type="text" name="name"/><br> <!-- Juli-->
	<input type="text" name="email"/><br><!-- dafishloa@yandex.ua -->
    <input type="text" name="telefone"/><br> <!-- 05073...-->

    <input type="submit"/>
</form>
<?php
    echo $str = serialize($_POST);
	print_r ($_POST);

?>