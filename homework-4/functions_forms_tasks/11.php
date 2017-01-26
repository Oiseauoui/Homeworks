<?php
/*<p>11. Написать функцию, которая в качестве аргумента принимает строку, и 
форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.<br>
Пример:<br><br>
Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, 
все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. 
А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. 
А ларчик просто открывался.А там хоть трава не расти.';</p>
*/
 
 function toupper($text) {
    $arr = explode('.', $text);
    // удаляем пустой элемент из массива, который там оказывается, если в последнем предложении стоит точка.
    $new_arr = array_diff($arr, array(''));
    $res = '';
    foreach ($new_arr as $key => $sentence) {
        $sentence = trim($sentence);
        if ($key != count($arr) - 1) {
            $res .= mb_strtoupper(mb_substr($sentence, 0, 1)) . mb_substr($sentence, 1) . ". ";
        } else {
            $res .= mb_strtoupper(mb_substr($sentence, 0, 1)) . mb_substr($sentence, 1) . ".";
        }
    }
    return $res;
}
?>


<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №11</title>
   
    <meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="header">
		
			<h2>Вывести заглавные буквы</h2>
			<br>
		
	</div>
	<form action="11.php" method="post">
	<div>
            <div>
                <fieldset>
                    <textarea class="text" name="text" id="text1" rows="3"></textarea>
                </fieldset>
            </div>
        </div>
        			<div>
				<button type="submit" value="Отправить" class="button">Отправить</button>
			</div>
		</div>
</form>
    <div>
        <?php
       if (!empty($_POST)) {
            echo "<div class=\"text\">" . toupper($_POST['text']) . "</div>";
        }
         
        ?>
</div>
</div>
</body>
</html>
        