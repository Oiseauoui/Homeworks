<?php
/*Создать страницу, на которой можно загрузить несколько фотографий в галерею. 
Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.<*/

 
 function imgUpload($user_img)
{
    $errors = [];
    $upload_dir = __DIR__ . '/gallery/';
    $max_size = 100000;
    $allowed_types = ['image/gif', 'image/jpeg', 'image/pjpeg', 'image/png'];
    foreach ($user_img['tmp_name'] as $key => $img) {
        if (!in_array($user_img['type'][$key], $allowed_types)) {
            $errors[] = 'Недопустимый тип файла';
        }
        if ($user_img['size'][$key] > $max_size) {
            $errors[] = 'Фаил слишком большой';
        }
        
        if (empty($errors)) {
            move_uploaded_file($img, $upload_dir . $user_img['name'][$key]);
        }
        else {
            return $errors;
        }
    }
}
if (isset($_FILES['user_img'])) {
    if (!is_dir(__DIR__ . '/gallery')) {
       mkdir(__DIR__ . '/gallery') ;
    }
    $res = imgUpload($_FILES['user_img']);
}
$table = '<table>';
$images = scandir(__DIR__ . '/gallery');
if (!empty($images)) {
    foreach ($images as $img) {
        if ($img === '.' || $img === '..') {
            continue;
        }
        $table .= "<tr><td><img class='img-rounded' src='gallery/$img' ></td></tr>";
    }
}
?>
<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №6</title>
   
    <meta charset="utf-8">
</head>
<body>
<div class="container">
	<div class="header">
		
			<h2>gallery</h2>
			<br>
		
	</div>
        <form enctype="multipart/form-data" method="post">

        <div>
        		<label  for="image">Изображение</label>
              
			  <input type="file" name="user_img[]" id="image" multiple>
        	<div>
				<button type="submit" value="Загрузить" class="button">Загрузить</button>
			</div>
			</form>
        </div>
<br>
    <div>
        <?php
        if (!isset($res)) {
            echo $table;
        }
        else {
            $res = implode('<br>', $res);
            echo "<div>$res </div>";
            echo $table;
        }
        ?>
    </div>
</body>
</html>


