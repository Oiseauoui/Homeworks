<?php
/**
 * Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
 * Значение N задавать через форму.
 * Проверить работу на кириллических строках - найти ошибку, найти решение.
 */
$success = 0;
if (!empty($_POST)){
    $n = $_POST['n'];
    $arr = file('3.txt');
    $file = fopen('3.txt', 'w');
    foreach ($arr as $key => $line) {
        if ((mb_strlen(trim($line)) > $n)) {
            unset($arr[$key]);
        }
    }
    fwrite($file, implode("", $arr));
    fclose($file);
    $success = 1;
}
?>
<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №3</title>
   
    <meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="header">
		
			<h2>Удалить все слова, длина которых превыщает N символов</h2>
			<br>
		
	</div>
	<form action="3.php" method="post">
	<div>
                    <label for="n">Количество символов:</label>
                    <input class="field" type="text" id="n" name="n">
                </div>
				<div>
				<button type="submit" value="Отправить" class="button">Отправить</button>
			</div>
		</div>
</form>
    <div>
        <?php
        if ($success == 1) {
            echo "<div class=\"text\">Строки удалены</div>";
        }
        ?>
</div>
</div>
</body>
</html>

