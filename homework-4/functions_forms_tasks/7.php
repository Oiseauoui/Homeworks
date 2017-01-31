<?php
/*<p>7. Создать гостевую книгу, где любой человек может оставить комментарий 
в текстовом поле и добавить его. Все добавленные 
комментарии выводятся над текстовым полем.</p>*/


if (!empty($_POST)) {
    $data = userForm($_POST);
    $result = save ($data);
    //var_dump($_POST);
}


function userForm($request) {
    $data = [

        'name' => !empty($request ['name']) ? $request ['name'] : '',
        'comment' => !empty($request ['text']) ? $request ['text'] : '',

    ];

//var_dump($data);
    return $data;
}
function save($data) {
    $items = getAll();
    $items[] = $data;
    return saveAll($items);
}
function getAll()
{
    $data = file_get_contents('comments.txt');
    $data = unserialize($data) ?: [];
    return $data;
}


function saveAll (array $items) {
    $items = serialize($items);
    // $items = var_export($items, false);
    file_put_contents('comments.txt', $items);

    return true;
}
function save_comments($comment){
    return file_put_contents('comments.txt',serialize($comment));
}
function get_comments(){
    return unserialize(file_get_contents('comments.txt'));
}

if (file_exists('comments.txt')){
    $comments=get_comments();
}
function filtr($comment){
    $file=file('words.txt');
    $cnt=count($file);
    for($i=0;$i<$cnt;$i++)
        $comment=str_replace(trim($file[$i]), '\'У нас не матерятся!\'', $comment);
    return $comment;
}

?>

<html>
<head>
    <link href="functions.css" rel="stylesheet" type="text/css">
    <title>Задание №7</title>

    <meta charset="utf-8">
</head>
<body>
<div class="container">
    <div class="header">

        <h2>Гостевая книга</h2>

        <?php if (file_exists('comments.txt')): ?>

        <div>
            <?php for ($i=0;$i<count($comments);$i++):?>
                <div class="comment">
                    <div>
                        <div><?=$comments[$i]['name']   ?></div>
                        <div class="col"><?=$comments[$i]['comment']  ?></div>
                    </div>

                    <div>
                        <div>Date comments:
                            <?php
                            echo date('l jS \of F Y h:i:s A');
                            ?>
                        </div>
                    </div>

                </div>
            <?php endfor; ?>

            <?php endif; ?>

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
                            <textarea class="field" name="text" rows="5" placeholder="Введите комментарий..."></textarea>
                        </fieldset>
                    </div>
                </div>
                <div>
                    <div class>
                        <button class="button" type="submit">Отправить</button>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>


