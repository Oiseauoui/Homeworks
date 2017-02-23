<?php
error_reporting(E_ALL);


session_start();

$action = isset($_GET['action']) ?
    $_GET['action'] :  'home';
$pages = ['home', 'login'];

define('BASE_DIR', __DIR__);
define('SRC_DIR', __DIR__ . '/src');
define('PAGES_DIR', SRC_DIR . '/pages');
define('VIEWS_DIR', SRC_DIR . '/views');

function render($file, $variables = []) {
    var_dump($variables); die;
    extract($variables, EXTR_SKIP);

     ob_start();
     require  VIEWS_DIR . '/' . $file . '.php';
     $renderedView = ob_get_clean();

      return $renderedView;
}

if(in_array($action, $pages)) {
	
	require PAGES_DIR . '/' . $action . '.php';
	
	//var_dump('we need to include');
}
else {
	die('wrong page');
}

