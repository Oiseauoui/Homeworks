<?php require VIEWS_DIR . '/header.php';?>

  <!--start content-->

<div class="content">

<?php
if (!empty($error)) {
	echo $error;
}
?>
  <form method="POST">
   Email: <input type="email" name="email">
	Password: <input type="password" name="password">
	<button type="submit">Login</button>
</form>
</div>
<!--end content-->

<hr>

<?php require VIEWS_DIR . '/footer.php';?>





