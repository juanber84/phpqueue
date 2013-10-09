<?php

	$file = dirname(__FILE__)."/../src/config.json";
	$json = json_decode(file_get_contents($file));
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if ($_POST['user'] == $json->secure->user && $_POST['pass'] == $json->secure->pass) {
			session_start();
			$_SESSION['user'] = $json->secure->user;
			header("Location: /index.php");

			echo "string"; exit;
		}
	}
 ?>

	<form action="" method="post">
		<label>User</label><input name="user" type="text"><br>
		<label>Password</label><input name="pass" type="passsword"><br>
		<input type="submit">
	</form>