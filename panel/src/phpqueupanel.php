<?php

	$file = dirname(__FILE__)."/../src/config.json";
	$json = json_decode(file_get_contents($file));
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		if ($_POST['user'] == $json->secure->user && $_POST['pass'] == $json->secure->pass) {
			session_start();
			$_SESSION['user'] = $json->secure->user;
		}
	}

//exec('php -S localhost:8000 -t /Users/juanber/Desktop/WORKSPACE/phpqueue/panel/')
