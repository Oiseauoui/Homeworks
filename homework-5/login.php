<?php


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


                }
            

?>