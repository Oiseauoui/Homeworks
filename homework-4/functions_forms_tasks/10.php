<?php
/*<p>10. Написать функцию, которая считает количество уникальных слов в тексте. 
Слова разделяются пробелами. Текст должен вводиться с формы.</p>
*/
 
 function countUnique($text)
{
    $arr = explode(" ", $text);
    $new_arr = array_unique($arr);
    $unique_length = count($new_arr);
    return $unique_length;
}
?>
<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №10</title>
   
    <meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="header">
		
			<h2>Уникальные слова</h2>
			<br>
		
	</div>
	<form action="10.php" method="post">
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
            echo "<div class=\"text\">" . countUnique($_POST['text']) . "</div>";
        }
         
        ?>
</div>
</div>
</body>
</html>
        