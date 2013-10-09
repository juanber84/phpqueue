<?php 
	session_start();
	if (!isset($_SESSION['user'])) : 
		header("Location: login.php");
	endif; 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>phpqueueDASHBOARD</title>
	</head>
	<body>
	<h1>phpqueue</h1>
	</body>
</html>
