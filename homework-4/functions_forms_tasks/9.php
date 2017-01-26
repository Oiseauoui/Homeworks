<?php
/*<p>9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать 
"edcba". Ввод текста реализовать с помощью формы.</p>*/
 
 function stringReverse($string){
    $new_string = '';
    for ($i = strlen($string) - 1; $i >=0; $i--){
        $new_string .= $string[$i];
    }
    return $new_string;
}
?>

<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №9</title>
   
    <meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="header">
		
			<h2>Перевернуть строку</h2>
			<br>
		
	</div>
	<form action="9.php" method="post">
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
            echo "<div class=\"text\">" . stringReverse($_POST['text']) . "</div>";
        }
         
        ?>

</div>
</body>
</html>

