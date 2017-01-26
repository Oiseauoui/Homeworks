<?php
/*<p>12. Написать функцию, которая в качестве аргумента принимает строку, 
и форматирует ее таким образом, что предложения идут в обратном порядке.<br>
Пример:<br><br>
Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь,
 все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался. 
А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
</p>
*/
 
 function reverse($text) {
    $arr = array_reverse(explode('.', $text));
    	$new_arr = array_diff($arr, array(''));
    $res = '';
    foreach ($new_arr as $key => $sentence) {
        $sentence = trim($sentence);
        if ($key != count($arr) - 1) {
            $res .= $sentence . ". ";
        }
        else {
            $res .= $sentence . ".";
        }
    }
    return $res;
}
?>

<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №12</title>
   
    <meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="header">
		
			<h2>Обратный порядок предложений</h2>
			<br>
		
	</div>
	<form action="12.php" method="post">
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
            echo "<div class=\"text\">" . reverse($_POST['text']) . "</div>";
        }
         
        ?>
</div>
</div>
</body>
</html>
       