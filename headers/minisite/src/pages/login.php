<?php

$request = $_POST;
$error = '';

if (!empty($request)) {
	//$result = handleRequest($request);
	$email = !empty($request['email'])
		? $request['email'] : '';
	$password = !empty($request['password'])
		? $request['password'] : '';

	//$users = getUsers();
	$users = require SRC_DIR . '/users.php';
//var_dump:($users);
	$loggedIn = false;
	foreach ($users as $user) {

		if ($user['email'] === $email && $user['password'] === $password) {
		$loggedIn = true;
		break;
		// set data in session
		//var_dump('logged in');
	}
}
	$error = '';
	if ($loggedIn) {
		//set in session
		$_SESSION['logged_in'] = true;


		//redirect to home page
	} else {
		//set errors
		$error = ' wrong email or password';

//var_dump($_POST);
	}
}
$view = render('login', ['error' => $error]);

var_dump($_SESSION);
var_dump($_SESSION['logged_in']);

echo $view;


require __DIR__ . '/../views/login.php';
?>
