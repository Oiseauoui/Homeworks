<?php


//die ('asdfgh') - Для проверки работы файлов
$request = $_POST;

if (!empty($request)) {
	//$result = handleRequest($request);
       $email = !empty($request['email']) ? $request['email'] : '';
       $password = !empty($request['password']) ? $request['password'] : '';

	   
	   //$users = getUsers();
	   $users = require 'users.php';
//var_dump:($users);
$loggedIn = false;
foreach ($users as $user) {
	
	if ($user['email'] === $email && $user['password'] === $password);
	$loggedIn = true;
	break;
	// set data in session
	//var_dump('logged in');
     }
}
$error = '';
if ($loggedIn) {
	//set in session


	//redirect to home page
}
else {
	//set errors
	$error = ' wrong email or password';
}
//var_dump($_POST);

?>

<?php require 'header.php'; ?>

  
<div clas="content">

<?php
if (!empty($error)) {
	echo $error;

}

require './../views/login.php';
?>
<!--
  <form method="POST">
   Email: <input type="email" name="email">
	Password: <input type="password" name="password">
	<button type="submit">Login</button>
</form>


</div>
<hr>
-->
/*<?php require 'footer.php';?>*/
	<!--
</body>
</html>-->




