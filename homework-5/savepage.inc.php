<?php
// Код для всех страниц - сохранение информации о посещенных страницах
$_SESSION['pages'] .= $_SERVER['PHP_SELF']. "|";