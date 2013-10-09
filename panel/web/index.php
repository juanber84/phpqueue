<?php require(dirname(__FILE__)."/../src/phpqueupanel.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if (isset($_SESSION['s_username'])) : ?>
	<h1>phpqueue</h1>
<?php else : ?>
	<?php require(dirname(__FILE__)."/../src/login.php") ?>
<?php endif; ?>

</body>
</html>
