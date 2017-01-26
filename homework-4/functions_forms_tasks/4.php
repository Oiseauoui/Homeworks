
<!--/*<p>4. Написать функцию, которая выводит список файлов
 в заданной директории. Директория задается как параметр функции.
 */-->
 
    
<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №4</title>
   
    <meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="header">
		
			<h2>Список файлов в заданной директории</h2>
			<br>
		
	</div>
	<form action="3.php" method="post">
	<div>
	<?php
                    function mydirectory($a){
    if ($op = opendir($a)) {
       //echo "<i>Список файлов в директории:</i> <br>";
        while (false !== ($res = readdir($op))) {
            if ($res != '.' && $res != '..') {
                echo "$res <br>";
            }
        }
    }
}
mydirectory('4_directory');
?>
    </div>

     </form>
</div>
</body>
</html>


