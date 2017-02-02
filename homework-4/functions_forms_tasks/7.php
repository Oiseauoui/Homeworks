
<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №7</title>

    <meta charset="utf-8">
</head>
<body>
<div class="container">
    <div class="header">
        <div>
            <h2>Гостевая книга</h2>
         </div>
        <div class="comment">


<?php

/*<p>7. Создать гостевую книгу, где любой человек может оставить комментарий
в текстовом поле и добавить его. Все добавленные 
комментарии выводятся над текстовым полем.</p>*/

$arrComment = array();
if(isset($_POST['submit'])) {
if (is_readable("comments.txt")) {
$f = file_get_contents("comments.txt");
$comments = unserialize($f);
}
if (!empty($_POST)) {
$newPost['name'] = htmlspecialchars($_POST['name']);
$newPost['comment'] = htmlspecialchars($_POST['comment']);
$comments[] = $newPost;
$commentsList = serialize($comments);
file_put_contents("comments.txt", $commentsList);
}

 if (isset($comments)) {
               $comments = array_reverse($comments);
               $cens = ["fuck", "no good", "дурак", "дура"];
               foreach ($comments as $badWords) {
                   foreach ($cens as $word) {
                       $badWords['name'] = str_replace($word, "У НАС НЕТ ТАКИХ ИМЕН", $badWords['name']);
                       $badWords['comment'] = str_replace($word, "Не используйте запретных слов", $badWords['comment']);
                   }
                   echo "<div class='item_comment'>";
                   echo "<p>Пользователь: <b> {$badWords['name']} </b></p>";
                   echo "<p>Оставил комментарий:   <i>{$badWords['comment']} </i> </p>";
                   echo "</div>";
               }
           }
           }

           ?>
</div>

            <form action="" method="post">
                <div>
                    <div>
                        <fieldset>
                            <input type="text" name="name" class="field" value="" placeholder="Введите ваше имя...">
                        </fieldset>
                    </div>
                </div>
                <div>
                    <div>
                        <fieldset>
                            <input class="field" type="text" name="comment" value="" placeholder="Введите комментарий...">
                        </fieldset>
                    </div>
                </div>
                <div>
                    <div class>
                        <input class="button"  name="submit" type="submit" value="ОТПРАВИТЬ">
                    </div>
                </div>
            </form>
        </div>
</body>
</html>



